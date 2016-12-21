@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="header-section" style="background-image: url('{{ asset('assets/images/header-main.jpg') }}')">
            <div class="row">
                <div class="col-md-10 header-all">
                    <div class="course-header">
                        <h3>CHOOSE OUR</h3>
                        <h1>SPECIALIZED COURSES</h1>
                        <p>This portal will provide you the latest photos, videos, and audio of the companies events. We design this<br>
                            portal to give you the best user experience.</p> 
                    </div>
                </div>         
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-sm-5 content-all">
                <h1>Dashboard
                    &nbsp;<a href="{{ url('/course/create') }}" class="btn btn-custom">Add Course</a>
                </h1>

                <hr>
                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Author</th>
                        <th>No. Lesson</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->instructor_name }}</td>
                                <td>{{ str_limit($course->description, $limit = 80, $end = '...') }}</td>
                                <td>
                                    <a href="{{ url('/course/'.$course->id.'/edit') }}" class="btn btn-custom">Edit</a>
                                    <a href="{{ url('/course/'.$course->id.'/lesson/create') }}" class="btn btn-custom">Add Lesson</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

 <!--      {!! Form::open(['method'=>'delete', 'url' => ['course', $course->id]]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-link', 'style' => '']) !!}
                                    {!! Form::close() !!} -->