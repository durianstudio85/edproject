<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Course;
use App\Lesson;
use App\User;
use App\Enroll;
use App\Complete;
use Auth;

class MycourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $id = Auth::user()->id;
        $enroll = Enroll::where('user_id', '=', $id)->get();
        $items = array();
        foreach($enroll as $enrolls) {
            $items[] = $enrolls->course_id;
        }
        $courses = Course::whereIn('id', $items)->get();

        foreach ($courses as $get_course) {
            $duration[$get_course->id] = $this->duration($get_course->id) ;   

            $noLessons = Lesson::where('courses_id','=',$get_course->id)->count();
            $complete = Complete::where('courses_id', '=', $get_course->id)->where('users_id', '=', $id)->count();

            $progress[$get_course->id] = number_format((100 / $noLessons) * $complete, 2, '.', ','); 

        }
        
        return view('mycourse.index', compact('courses', 'id', 'duration', 'progress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->get('course_id');
        Enroll::Create($request->all());
        return redirect('/courses/'.$id.'');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//$explodedTime[0]*

    public function duration($course_id)
    {
        
        $lesson = Lesson::where('courses_id', '=', $course_id)->get();
        $sumSeconds = 0;
        foreach ($lesson as $selected) {
            $addZero = '00:'.$selected->duration;
            $explodedTime = explode(':', $addZero);
            $seconds = $explodedTime[0]*3600+$explodedTime[1]*60+$explodedTime[2];
            $sumSeconds += $seconds;
        }
        $hours = floor($sumSeconds/3600);
        $minutes = floor(($sumSeconds % 3600)/60);
        $seconds = (($sumSeconds%3600)%60);
        $sumTime = $hours.':'.$minutes.':'.$seconds;
        $change = gmdate("H:i:s", $sumSeconds);
        return $change;
    }

}
