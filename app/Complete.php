<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complete extends Model
{
    protected $fillable = [
		'users_id',
		'courses_id',
		'lessons_id',
	];
}
