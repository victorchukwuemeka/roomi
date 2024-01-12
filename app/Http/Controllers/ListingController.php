<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\RoomRequest;


class ListingController extends Controller
{
    public function index(){
      return view('listing.post');
    }

    public function find(){
      $listings = Listing::all();
      $viewData = [];
      //$viewData['title'] = "Make A Post";
      $viewData['listings'] = $listings;
      return view('listing.find')->with('viewData', $viewData);
    }


    public function store(Request $request){

    ini_set('max_execution_time', 300);
    //dd($request->all());
    //Listing::validate($request);
    $listing  = new Listing();
    $user_id = $user_id_in_session = Auth::id();
    if (!$user_id || $user_id == false) {
      return redirect()->route('login');
    }
    $listing->set_user_id($user_id);
    $listing->set_title($request->input('title'));
    $listing->set_location($request->input('location'));
    $listing->set_rent($request->input('rent'));
    $listing->set_description($request->input('description'));
    $time = time();

     if ($request->hasFile('video')) {
              dd('vic');
              $video_file_name = $time.".".$request->file('video')->extension();
              Storage::disk('public')->put(
                $video_file_name, file_get_contents($request->file('video')->getRealPath())
              );
              $listing->set_video($video_file_name);
              $listing->save();
      }

      return redirect('/dashboard');
    }

    public function search(Request $request){
      $query = $request->input('query');
      $listings = Listing::where(function ($queryBuilder) use ($query) {
        $queryBuilder->where('title', 'like', '%' . $query . '%')
                 ->orWhere('location', 'like', '%' . $query . '%');
        })->paginate(10);

      $viewData = [];
      $viewData['listings'] = $listings;
      return view('listing.result')->with('viewData', $viewData);
    }

}
