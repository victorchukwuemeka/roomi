<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public $table = 'message';

    public function get_id(){
      return $this->attributes['id'];
    }

    public function set_id($id){
      $this->attributes['id'] = $id;
    }

    public function get_sender_id(){
      return $this->attributes['sender_id'];
    }

    public function set_sender_id($sender_id){
      $this->attributes['sender_id'] = $sender_id;
    }

    public function get_receiver_id(){
      return $this->attributes['receiver_id'];
    }

    public function set_receiver_id($receiver_id){
      $this->attributes['receiver_id'] = $receiver_id;
    }

    public function get_message_content(){
      return $this->attributes['message_content'];
    }

    public function set_message_content($message_content){
      $this->attributes['message_content'] = $message_content;
    }

    public function sender()
    {
        return $this->belongsTo(User::class);
    }

    public function receiver()
    {
        return $this->belongsTo(User::class);
    }




}
