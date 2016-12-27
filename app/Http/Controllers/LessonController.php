<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Course;
use App\Lesson;
use App\Enroll;
use Auth;

class LessonController extends Controller
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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($course_id)
    {
        $course = Course::findOrFail($course_id);
        $lesson = Lesson::where('courses_id', '=', $course->id)->get();
        return view('lesson.create', compact('course', 'lesson'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Lesson::Create($data);
        return redirect('/courses/'.$request->get('courses_id').'/lesson/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $lesson = Lesson::findOrFail($id);
       $course = Course::findOrFail($lesson->courses_id);
       // $course = Course::where('id', '=', $lesson->courses_id)->get();

        $user = Auth::User();  
        $id = $user->id;
        $enroll = Enroll::where('user_id', '=', $id)->get();
        $mycourse[] = '';
        foreach($enroll as $enrolls) {
            $mycourse[] = $enrolls->course_id;
        }

        if(in_array($course->id, $mycourse )){
            return view('lesson.show', compact('course','lesson'));
        }else{
            return redirect('/courses/'.$course->id);
        }

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $current_lesson = Lesson::findOrFail($id);
        $course = Course::findOrFail($current_lesson->courses_id);
        $lesson = Lesson::where('courses_id', '=', $course->id)->get();
       return view('lesson.edit', compact('lesson', 'course','current_lesson'));
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
        $lesson = Lesson::findOrFail($id);
        $lesson->update($request->all());
        return redirect('/courses/'.$lesson->courses_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
