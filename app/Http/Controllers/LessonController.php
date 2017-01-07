<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Course;
use App\Lesson;
use App\Enroll;
use App\Complete;
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
       $previous_first = Lesson::where('courses_id', '=', $course->id)->first();
       $next_last = Lesson::where('courses_id', '=', $course->id)->orderBy('id','desc')->first();

        // get previous user id
        $previous = Lesson::where('id', '<', $lesson->id)->max('id');

        // get next user id
        $next = Lesson::where('id', '>', $lesson->id)->min('id');

        // Pagination Button
        if ($previous_first->id == $id) {
            $previous = "";
        }

        // Pagination Button
        if ($next_last->id == $id) {
            $next = "";
        }


        $user = Auth::User();  
        $id = $user->id;
        $user_role = $user->user_role;
        $enroll = Enroll::where('user_id', '=', $id)->get();
        $mycourse[] = '';
        foreach($enroll as $enrolls) {
            $mycourse[] = $enrolls->course_id;
        }

        $complete = Complete::where('courses_id', '=', $lesson->courses_id)->where('lessons_id', '=', $lesson->id)->where('users_id', '=', $user->id)->count();

        if(in_array($course->id, $mycourse ) || $user_role == 'admin'){
            return view('lesson.show', compact('course','lesson','someUsers', 'previous', 'next', 'complete'));
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


    public function complete(Request $request)
    {
        $data = $request->all();
        Complete::Create($data);
        return redirect('/lesson/'.$request->get('lessons_id'));
    }
}
