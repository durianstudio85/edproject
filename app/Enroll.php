<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    protected $fillable = [
		'course_id',
		'user_id',
	];


	public function checkEnroll($id){
        $user = Auth::User();    
        $user_result = Enroll::where('user_id', '=', $user->id)->count();
        return $user_result;
    }
}
