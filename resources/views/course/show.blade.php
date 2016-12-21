@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="header-section" style="background-image: url('{{ asset('assets/images/header-main.jpg') }}')">
            <div class="row">
                <div class="col-md-10 header-all">
                    <div class="course-header">
                        <h3>WELCOME TO</h3>
                        <h1>{{ $course->name }}</h1>
                      
                    </div>   
                </div>         
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 content-all">
                <!-- <h1>Course</h1> <hr> -->
                <br>
                <br>
                <div class="row">
                   <div class="col-md-3">
                        <div class="img-circle" style="text-align: center;">
                            
                            <img src="{{ asset('upload/'.$course->instructor_img) }}">
                            
                            <p class="detailedlabel">{{ $course->instructor_name }}</p>
                            <p class="instructor_label">Instructor</p>

                            <p class="detailedlabel">{{ $course->created_at }}</p>
                            <p class="instructor_label">Date</p>
                            
                            <p class="detailedlabel">{{ $course->slug }}</p>
                            <p class="instructor_label">Category</p>
                            <br>
                            <p><a href="#" class="btn btn-custom">Enroll</a></p>
                        </div>
                   </div>
                   <div class="col-md-7 content_separator">
                        <p>{{ $course->description }}</p>
                        <!-- <a href="{{ url('/course/'.$course->id.'/lesson/create') }}" class="btn btn-custom">Add Lesson</a> -->
                        <table class="table table-custom">
                            <thead>
                                <th style="width: 85%">&nbsp;</th>
                                <th style="width: 15%">&nbsp;</th>
                            </thead>
                           @foreach($lesson as $lessons)
                                <tr>
                                    <td> <a class="link_lessons" href="{{ url('/lesson/'.$lessons->id) }}">{{ $lessons->title }}</td>
                                    <td class="duration_size">{{ $lessons->duration }}</td>
                                </tr>   
                            @endforeach
                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection