<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Enroll;

class Course extends Model
{
    protected $fillable = [
		'name',
		'slug',
		'description',
		'photo',
		'instructor_name',
		'instructor_img',
		'category',
	];


	public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }

    public function users()
    {
    	return $this->belongsToMany('App\User');
    }	
    
}
