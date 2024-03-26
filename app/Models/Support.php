<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $table = 'support';

    public function set_id($id){
      $this->attributes['id'] = $id;
    }

    public function get_id(){
      return $this->attributes['id'];
    }

    public function set_name($name){
      $this->attributes['name'] = $name;
    }

    public function get_name(){
      return $this->attributes['name'];
    }

    public function set_email($email){
      $this->attributes['email'] = $email;
    }

    public function get_email(){
      return $this->attributes['email'];
    }

    public function set_message($message){
      $this->attributes['message'] = $message;
    }

    public function get_message(){
      return $this->attributes['message'];
    }

}
