<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Support;

class SupportController extends Controller
{
    public function store(Request $request)
    {
      //the message goes to the admin dashboard for support 
      $validated = $request->validate([
       'name' => 'required|max:255',
       'email'=> 'required',
       'message' => 'required',
      ]);
      $new_support = new Support();
      $new_support->set_name($request->input('name'));
      $new_support->set_email($request->input('email'));
      $new_support->set_message($request->input('message'));
      $new_support->save();
     return redirect('contact');
    }
}
