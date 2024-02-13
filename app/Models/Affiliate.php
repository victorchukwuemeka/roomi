<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    use HasFactory;
    public $table = 'affiliates';

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

    public function get_code(){
      return $this->attributes['code'];
    }

    public function set_code($code){
      $this->attributes['code'] = $code;
    }
    

    public function get_location(){
      return $this->attributes['location'];
    }

    public function set_location($location){
      $this->attributes['location'] = $location;
    }

    public function get_balance(){
      return $this->attributes['balance'];
    }

    public function set_balance($balance){
      $this->attributes['balance'] = $balance;
    }


    public function get_phone_num(){
      return $this->attributes['phone_num'];
    }

    public function set_phone_num($phone_num){
      $this->attributes['phone_num'] = $phone_num;
    }

    public function get_acc_num(){
      return $this->attributes['Acc_num'];
    }

    public function set_acc_num($acc_num){
      $this->attributes['Acc_num'] = $acc_num;
    }

    public function get_bank_name(){
      return $this->attributes['bank_name'];
    }

    public function set_bank_name($bank_name){
      $this->attributes['bank_name'] = $bank_name;
    }

    public function user(){
      return $this->belongsTo(User::class);
    }


}
