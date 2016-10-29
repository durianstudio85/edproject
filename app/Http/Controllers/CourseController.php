<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Course;
use App\Lesson;
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
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::User();     
        if ($user->id == '1') {
            return view('course.create');
        }else{
            return redirect('/course');
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
        $data = [
            'name' => $request->get('name'),
            'slug' => $slug,
            'description' => $request->get('description'),
        ];
        Course::Create($data);
        return redirect('/course');
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
        $course = Course::findOrFail($id);
        $lesson = Lesson::where('courses_id', '=', $course->id)->get();
        return view('course.edit', compact('course', 'lesson'));
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
        return redirect('/course');
    }
}
