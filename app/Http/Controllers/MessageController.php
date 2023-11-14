<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index($id){
      $user = User::find($id);

      $messages = Message::all();
      $viewData = [];
      $viewData['messages'] = $messages;
      $viewData['user_id'] = $user->get_id();
      $viewData['user'] = $user;
      $viewData['user_id_in_session'] = Auth::id();
      return view('profile.chat')->with('viewData', $viewData);
    }


    public function store(Request $request){
      $user_id_in_session = Auth::id();
      $message = new Message();
       
      $message->set_sender_id($user_id_in_session);
      $message->set_receiver_id($request->input('receiver_id'));
      $message->set_message_content($request->input('message_content'));
      $message->save();
      $id = $request->input('receiver_id');

      //return back();
      //return redirect()->route('messages.store');
      return $this->index($request->input('receiver_id'));
    }
}
