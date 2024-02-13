<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public $table = 'payment';

    public function get_id(){
      return $this->attributes['id'];
    }

    public function set_id($id){
      $this->attributes['id'] = $id;
    }

    public function get_affiliate_id(){
      return $this->attributes['affiliate_id'];
    }

    public function set_affiliate_id($affiliate_id){
      $this->attributes['affiliate_id'] = $affiliate_id;
    }


    public function get_amount(){
      return $this->attributes['amount'];
    }

    public function set_amount($amount){
      $this->attributes['amount'] = $amount;
    }


    public function get_acc_num(){
      return $this->attributes['account_num'];
    }

    public function set_acc_num($acc_num){
      $this->attributes['account_num'] = $acc_num;
    }

    public function get_bank_name(){
      return $this->attributes['bank_name'];
    }

    public function set_bank_name($bank_name){
      $this->attributes['bank_name'] = $bank_name;
    }

}
