<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    protected $fillable = [
		'courses_id',
		'title',
		'short_description',
        'link',
        'duration',
	];
}
