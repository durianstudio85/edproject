<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'username',
        'job_title',
        'birthday',
        'address',
        'phone',
        'biography',
        'user_role',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function course()
    // {
    //     return $this->hasMany('App\Course');
    // }

    public function course()
    {
        return $this->belongsToMany('App\Course');
    }   
}
