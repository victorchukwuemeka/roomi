<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'occupation',
        'location',
        'about_me',
        'gender',
        'religion',
        'role',
        'lead_code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];




    //all the needed attribute
    public function get_id(){
      return $this->attributes['id'];
    }

    public function set_id($id){
      $this->attributes['id'] = $id;
    }

    public function set_profile_image($profile_image){
      $this->attributes['profile_image'] = $profile_image;
    }


    public function get_profile_image(){
      return $this->attributes['profile_image'];
    }

    public function set_lead_code($lead_code){
      $this->attributes['lead_code'] = $lead_code;
    }

    public function get_lead_code(){
      return $this->attributes['lead_code'];
    }


    //the relationship between the user and the listing
    public function listing(){
      return $this->hasMany(Listing::class);
    }

    //the relationship between the user and the affiliate
    public function affiliate()
    {
      return $this->hasOne(Affiliate::class);
    }


}
