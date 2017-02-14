<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Course;
use App\Enroll;
use App\Lesson;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('id','desc')->get();
        $mycourse = Enroll::get();
        return view('index', compact('courses'));
    }

    public function show($slug, $id)
    {
        $courses = Course::findOrFail($id);
        $first_lesson = Lesson::where('courses_id','=',$courses->id)->orderBy('id')->first();

        $lessonItems = Lesson::where('courses_id','=',$courses->id)->skip(0)->take(5)->orderBy('id')->get();

        if ($courses->slug == $slug) {
            return view('show', compact('courses','first_lesson', 'lessonItems'));
        }else{
            return redirect('/');
        }
    }
}
