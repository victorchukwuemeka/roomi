<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    public function get_id(){
      return $this->attributes['id'];
    }

    public function set_id($id){
      $this->attributes['id'] = $id;
    }


    public function get_reviewer_id(){
      return $this->attributes['reviewer_id'];
    }

    public function set_sender_id($reviewer_id){
      $this->attributes['reviewer_id'] = $reviewer_id;
    }


    public function get_reviewed_user_id(){
      return $this->attributes['reviewed_user_id'];
    }

    public function set_reviewed_user_id($reviewed_user_id){
      $this->attributes['reviewed_user_id'] = $reviewed_user_id;
    }


    public function get_rating(){
      return $this->attributes['rating'];
    }

    public function set_rating($rating){
      $this->attributes['rating'] = $rating;
    }


    public function get_review_content(){
      return $this->attributes['review_content'];
    }

    public function set_review_content($review_content){
      $this->attributes['review_content'] = $review_content;
    }
}
