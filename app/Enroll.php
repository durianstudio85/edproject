<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    protected $fillable = [
		'course_id',
		'user_id',
	];


	public function counted(){
        // $course_count = Enroll::where('course_id', '=', $id)->count();
        $message = "Hello World";
        return $message;
    }

    
}
