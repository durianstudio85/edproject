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
                <h1>Course 
                    @if ( $user_role === 'admin')
                        <a href="{{ url('/course/create') }}" class="btn btn-custom">Create</a>
                    @endif
                </h1>
                <hr>
                @foreach($courses as $course)
                    <div class="row course-list">
                        <div class="col-md-2 col-sm-2">
                            <center>
                                <img src="{{ asset('upload/'.$course->photo) }}" class="course-img" />
                                <!-- <img src="{{ asset('assets/images/laravel5.2.png') }}" class="course-img"> -->
                            </center>
                        </div>
                        <div class="col-md-7 col-sm-7 content-description">
                            <a href="{{ url('/course/'.$course->id) }}"  class="course-title"><h1>{{ $course->name }}</h1></a>
                            <p>{{ $course->description }}</p>
                            <a href="{{ url('/course/'.$course->id) }}" class="btn btn-custom">View</a>&nbsp;
                            @if ( $user_role === 'admin')
                                <a href="{{ url('/course/'.$course->id.'/edit') }}" class="btn btn-custom">Edit</a>&nbsp;
                                {!! Form::open(['method'=>'delete', 'url' => ['course', $course->id]]) !!}
                                      {!! Form::submit('Delete', ['class' => 'btn btn-custom', 'style' => 'margin-top: -56px;margin-left: 120px;']) !!}
                                {!! Form::close() !!}
                            @endif
                            
                        </div>
                        <div class="col-md-2">
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection