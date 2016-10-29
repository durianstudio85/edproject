<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/course', 'CourseController@index');
Route::get('/course/create', 'CourseController@create');
Route::post('/course/create', 'CourseController@store');
Route::get('/course/{id}', 'CourseController@show');
Route::get('/course/{id}/edit', 'CourseController@edit');
Route::patch('/course/{id}/edit', 'CourseController@update');
Route::delete('course/{id}', 'CourseController@destroy');

// Route::resource('course', 'CourseController');

Route::get('/course/{course_id}/lesson/create', 'LessonController@create');
Route::post('/course/{course_id}/lesson/create', 'LessonController@store');
Route::get('/course/{course_id}/lesson/{id}', 'LessonController@edit');