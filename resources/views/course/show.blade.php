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
                            <p> 
                                @if(in_array($course->id, $mycourse ))
                                    <a href="#" class="btn btn-danger">Enrolled</a>
                                @else
                                    <center>
                                       {!! Form::open(['url'=>'mycourses/create']) !!}
                                            {!! Form::hidden('course_id', $course->id); !!}
                                            {!! Form::hidden('user_id', Auth::user()->id); !!}
                                            {!! Form::submit('Enroll', ['class' => 'btn btn-custom']) !!}
                                        {!! Form::close() !!}
                                    </center>
                                @endif
                            </p>
                        </div>
                   </div>
                   <div class="col-md-7 content_separator">
                        <p class="description-link">{!! $introduction->link !!}</p>
                        <p>{{ $course->description }}</p>
                        <!-- <a href="{{ url('/course/'.$course->id.'/lesson/create') }}" class="btn btn-custom">Add Lesson</a> -->
                        <table class="table table-custom">
                            <thead>
                                <th style="width: 90%">&nbsp;</th>
                                <th>&nbsp;</th>
                            </thead>
                           @foreach($lesson as $lessons)
                                <tr>
                                    @if(in_array($course->id, $mycourse ))
                                        <td> <a class="link_lessons" href="{{ url('/lesson/'.$lessons->id) }}">{{ $lessons->title }}</a></td>
                                    @else
                                        <td> <a class="link_lessons" href="#" data-toggle="modal" data-target="#myModal">{{ $lessons->title }}</a></td>
                                    @endif
                                    <td class="duration_size">{{ $lessons->duration }}</td>
                                </tr>   
                            @endforeach
                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <!-- <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  
                </div> -->
                
                <div class="modal-body">
                  <h4>you need to enroll first before viewing the lessons.</h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                </div>
              </div>
              
            </div>
          </div>
@endsection