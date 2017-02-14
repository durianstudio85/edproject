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
                <div class="row course-list-box">
                    @foreach($courses as $course)
                        <div class="course-list-box-single">
                            <div class="course-box-img">
                                <img src="{{ asset('upload/'.$course->photo) }}"/><!-- <img src="{{ asset('assets/images/laravel5.2.png') }}" class="course-img"> -->
                            </div>
                            <div class="course-box-content">
                        
                                <a href="{{ url('/courses/'.$course->id) }}">{{ $course->name }}</a>

                                <p>By {{ $course->instructor_name }}</p>
                            </div>
                            <div class="course-box-status">
                                <div class="course-box-status-user-count">
                                    <i class="fa fa-users fa-lg" aria-hidden="true"></i>&nbsp;
                                        {{ App\Enroll::where('course_id','=',$course->id)->count() }}
                                </div>
                                <div class="course-box-status-price">
                                    <p>FREE</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection