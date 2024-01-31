<?php

namespace App\Http\Controllers\Admin\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
      return view('admin.auth.login');
    }

    public function login(Request $request)
    {
      //dd($request);
      $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
      ]);

      if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        //dd('good');
        return redirect('/admin/dashboard');
       }

       return back()->withErrors([
           'email' => 'The provided credentials do not match our records.',
       ])->onlyInput('email');
   }

}
