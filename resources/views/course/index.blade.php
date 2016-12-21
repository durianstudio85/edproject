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
                <h1 class="pad-title">Courses </h1>
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
                            <a href="{{ url('/courses/'.$course->id) }}"  class="course-title"><h1>{{ $course->name }}</h1></a>
                            <p>{{ $course->description }}</p>
                            <a href="{{ url('/courses/'.$course->id) }}" class="btn btn-custom">Enroll</a>&nbsp;
                        </div>
                        <div class="col-md-2">
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection