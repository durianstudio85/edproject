<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
		'name',
		'slug',
		'description',
		'photo',
		'instructor_name',
		'instructor_img',
	];


	

}
