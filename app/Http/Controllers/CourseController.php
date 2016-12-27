<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Course;
use App\Lesson;
use App\Enroll;
use Auth;


class CourseController extends Controller
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
        // $courses = DB::table('courses')->get();
        $courses = Course::get();
        $user = Auth::User();  
        $user_role = $user->user_role;
        $id = $user->id;
        $enroll = Enroll::where('user_id', '=', $id)->get();
        $mycourse[] = '';
        foreach($enroll as $enrolls) {
            $mycourse[] = $enrolls->course_id;
        }
         
        return view('course.index', compact('courses', 'user_role', 'mycourse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::User();     
        if ($user->user_role == 'admin') {
            return view('course.create');
        }else{
            return redirect('/courses');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = str_slug($request->get('name'), '_');
        $photo = $request->file('photo');
        $filename = str_random(20).$photo->getClientOriginalName();
        $photo->move(public_path().'/upload',$filename);
        // instructor Details
        $instructor_img = $request->file('instructor_img');
        $instructor_filename = str_random(20).$photo->getClientOriginalName();
        $instructor_img->move(public_path().'/upload',$instructor_filename);
        $data = [
            'name' => $request->get('name'),
            'slug' => $slug,
            'description' => $request->get('description'),
            'photo' => $filename,
            'instructor_name' => $request->get('instructor_name'),
            'instructor_img' => $instructor_filename,
        ];
        Course::Create($data);
        return redirect('/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $course = Course::findOrFail($id);
        $lesson = Lesson::where('courses_id', '=', $course->id)->get();
        return view('course.show', compact('course', 'lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::User();     
        if ($user->user_role == 'admin') {
            $course = Course::findOrFail($id);
            $lesson = Lesson::where('courses_id', '=', $course->id)->get();
            return view('course.edit', compact('course', 'lesson'));
        }else{
            return redirect('/courses');
        }
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
        $course = Course::findOrFail($id);
        $slug = str_slug($request->get('name'), '_');
        $data = [
            'name' => $request->get('name'),
            'slug' => $slug,
            'description' => $request->get('description'),
        ];
        $course->update($data);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::destroy($id);
        return redirect('/courses');
    }

    
}
