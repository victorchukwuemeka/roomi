<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserListing extends Model
{
    use HasFactory;

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

    public function get_listing_id(){
      return $this->attributes['listing_id'];
    }
    public function set_listing_id($listing_id){
      $this->attributes['listing_id'] = $listing_id;
    }


}
