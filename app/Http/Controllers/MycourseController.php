<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Course;
use App\Lesson;
use App\User;
use App\Enroll;
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

        foreach ($courses as $get_duration) {
            $duration[$get_duration->id] = $this->duration($get_duration->id) ;   
        }
        return view('mycourse.index', compact('courses', 'id', 'duration'));
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
            $explodedTime = explode(':', $selected->duration);
            $seconds = 3600+$explodedTime[0]*60+$explodedTime[1];
            $sumSeconds += $seconds;
        }
        // $hours = floor($sumSeconds/3600);
        // $hours.':'
        $minutes = floor(($sumSeconds % 3600)/60);
        $seconds = (($sumSeconds%3600)%60);
        $sumTime = $minutes.':'.$seconds;
        return $sumTime;
    }

}
