@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="header-section" style="background-image: url('{{ asset('assets/images/header-main.jpg') }}')">
            <div class="row">
                <div class="col-md-10 header-all">
                    <div class="course-header">
                        <h3>CHOOSE OUR</h3>
                        <h1>SPECIALIZED COURSES</h1>
                      
                    </div>
                </div>         
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-sm-5 content-all">
                <h1 class="pad-title">My Courses
                    &nbsp;<a href="{{ url('/courses/') }}" class="btn btn-custom">Browse Course</a>
                </h1>
                <div class="content-table">
                    <hr>
                    

                    
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Author</th>
                            <!-- <th>Description</th> -->
                            <th><center>No. Lesson</center></th>
                            <th><center>Duration</center></th>
                            <th><center>Progress</center></th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->instructor_name }}</td>
                                    <!-- <td>{{ str_limit($course->description, $limit = 80, $end = '...') }}</td> -->
                                    <td><center>{{ App\Lesson::where('courses_id','=',$course->id)->count() }}</center></td>
                                    <td>
                                        <center>
                                            @foreach($duration as $key => $value)
                                                @if($key == $course->id)
                                                    {{ $value }}
                                                @endif
                                            @endforeach
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            @foreach($progress as $progress_key => $progress_value)
                                                @if($progress_key == $course->id)
                                                    {{ $progress_value }}%
                                                @endif
                                            @endforeach
                                        </center>
                                    </td>
                                    <td><a href="{{ url('/courses/'.$course->id) }}" class="btn btn-custom">View</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection