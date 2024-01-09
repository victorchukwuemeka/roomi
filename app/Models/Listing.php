<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public $table = 'listing';

    public function get_id(){
      return $this->attributes['id'];
    }

    public function set_id($id){
      $this->attributes['id'] = $id;
    }

    public function get_user_id(){
      return $this->attributes['user_id'];
    }

    public function set_user_id($user_id){
      $this->attributes['user_id'] = $user_id;
    }

    public function get_title(){
      return $this->attributes['title'];
    }

    public function set_title($title){
      $this->attributes['title'] = $title;
    }

    public function get_location(){
      return $this->attributes['location'];
    }

    public function set_location($location){
      $this->attributes['location'] = $location;
    }

    public function get_rent(){
      return $this->attributes['rent'];
    }

    public function set_rent($rent){
      $this->attributes['rent'] = $rent;
    }


    public function get_description(){
      return $this->attributes['description'];
    }

    public function set_description($description){
      $this->attributes['description'] = $description;
    }

    public function get_video(){
      return $this->attributes['video'];
    }

    public function set_video($video){
      $this->attributes['video'] = $video;
    }

    public function user(){
      return $this->belongsTo(User::class);
    }

    public static function validate($request){
      $request->validate([
        'title' => 'required|max:255',
        'location' => 'required',
        'rent' => 'required|numeric',
        'description' => 'required',
        'profile_image' => ''
      ]);
    }
}
