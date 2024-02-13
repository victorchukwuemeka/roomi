<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Support\Facades\Storage;



class ProfileController extends Controller
{


    /*
    * display the user's profile
    */
    public function index($id): View
    {

      $viewData = [];
      $user_id_in_session = Auth::id();

      $viewData['user_id_in_session'] = $user_id_in_session;
      $viewData['users'] = User::all();
       //dd($viewData['user_profile_image'] = User::find($id));
      $user = User::find($id);
      $viewData['user'] = $user;
      $viewData['user_profile_image'] = $user->get_profile_image();
      $viewData['listings'] = Listing::all();
      $viewData['id']  = $id;

      return view('profile.index')->with('viewData', $viewData);
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
       //dd($request->user());
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        //dd($request);
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }


    public function added(Request $request, User $user){
      //dd($request);
      $time = time();
      if ($request->hasFile('profile_image')) {
          $profile_image_name = $time.".".$request->file('profile_image')->extension();
          //dd($profile_image_name);
          Storage::disk('public')->put(
            $profile_image_name, file_get_contents($request->file('profile_image')->getRealPath())
          );
          $user->set_profile_image($profile_image_name);
          $user->save();
      }

      /*$validated = $request->validate([
        'name' => 'required|max:255',
        'location' => 'required',
        'occupation' => 'required',
        'description' => 'required',
        'about_me'   => 'required',
        'religion' => 'required|max:255',
        'gender' => 'required',
      ]);*/

      $user->update($request->all());
      return redirect()->route('profile.edit')->with('success', 'user updated successfully');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
