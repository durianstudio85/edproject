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

// Route::get('/', function () {
//     return view('index');
// });

Route::auth();

Route::get('/categories/create', 'CategoryController@index');
Route::post('/categories/create', 'CategoryController@store');
Route::get('/categories/{id}/edit', 'CategoryController@edit');
Route::patch('/categories/{id}/edit', 'CategoryController@update');

Route::get('/', 'HomeController@index');
Route::get('/categories/{slug}/{id}', 'HomeController@categories');




Route::get('/courses', 'CourseController@index');
Route::get('/courses/create', 'CourseController@create');
Route::post('/courses/create', 'CourseController@store');
Route::get('/courses/{id}', 'CourseController@show');
Route::get('/courses/{id}/edit', 'CourseController@edit');
Route::patch('/courses/{id}/edit', 'CourseController@update');
Route::delete('courses/{id}', 'CourseController@destroy');

// Route::resource('/course', 'CourseController');

Route::get('/courses/{course_id}/lesson/create', 'LessonController@create');
Route::post('/courses/{course_id}/lesson/create', 'LessonController@store');
Route::get('/lesson/{id}', 'LessonController@show');
Route::get('/lesson/{id}/edit', 'LessonController@edit');
Route::patch('/lesson/{id}/edit', 'LessonController@update');

// Complete Lesson Add
Route::post('/complete', 'LessonController@complete');

// profile
Route::get('/profile', 'ProfileController@index' );
Route::get('/profile/edit', 'ProfileController@edit' );
Route::patch('/profile/edit', 'ProfileController@update' );

//Dashboard

Route::get('/dashboard', 'DashboardController@index' );


//My course
Route::get('/mycourses', 'MycourseController@index' );
Route::post('/mycourses/create', 'MycourseController@store' );

//Facebook
Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');


Route::get('/{slug}/{id}', 'HomeController@show');