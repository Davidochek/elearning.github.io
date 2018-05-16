<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Hash;




class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','lastname','regno', 'school', 'course',
    ];

    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
    // public function setPasswordAttribute($value){
    //     return $this->attributes['password']=Hash::make($value);
    // }
    public function course(){
        return $this->hasOne(Course::class);
    }
     public function units(){
        return $this->hasMany(Unit::class);
    }

}
