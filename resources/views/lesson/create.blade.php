@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="header-section" style="background-image: url('{{ asset('assets/images/header-main.jpg') }}')">
            <div class="row">
                 <div class="col-md-10 col-sm-5 header-all">
                    <div class="course-header">
                        <h3>CHOOSE OUR</h3>
                        <h1>SPECIALIZED COURSES</h1>
                      
                    </div>
                </div>         
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 content-all">
                <h1 class="pad-title">Admin Section/Control Page</h1>
                <hr>
                <div class="row">
                   <div class="col-md-3">
                        <div class="img-circle" style="text-align: center;">
                            
                            <img src="{{ asset('upload/'.$course->instructor_img) }}">
                            
                            <p class="detailedlabel">{{ $course->name }}</p>
                            <p class="instructor_label">Instructor</p>

                            <p class="detailedlabel">{{ $course->created_at }}</p>
                            <p class="instructor_label">Date</p>
                            
                            <p class="detailedlabel">{{ $course->slug }}</p>
                            <p class="instructor_label">Category</p>
                        </div>
                   </div>
                   <div class="col-md-7 content_separator">
                        {!! Form::open(['url'=>'course/'.$course->id.'/lesson/create']) !!}
                        {!! Form::hidden('courses_id', $course->id); !!}
                            <div class="col-md-5">
                                <div class="form-group">
                                    {!! Form::text('title', null,['class'=>'form-control', 'placeholder'=>'Title']) !!}
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    {!! Form::text('link', null,['class'=>'form-control', 'placeholder'=>'Youtube link']) !!}
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::text('duration', null,['class'=>'form-control', 'placeholder'=>'Time e.g. 3:40']) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::textarea('short_description', null,['class'=>'form-control', 'placeholder'=>'Description']) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                {!! Form::submit('Save', ['class' => 'btn btn-custom']) !!}
                                <a href="{{ url('/course/'.$course->id.'/') }}" class="btn btn-default">Cancel</a>
                            </div>
                        {!! Form::close() !!}

                        <br>
                        <br>
                        <br>
                        <br>
                        <table class="table">
                            <thead>
                                <th style="width: 75%">Title</th>
                                <th style="width: 15%">Duration</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($lesson as $lessons)
                                    <tr>
                                        <td> <a class="link_lessons" href="{{ url('/lesson/'.$lessons->id) }}">{{ $lessons->title }}</td>
                                        <td class="duration_size">{{ $lessons->duration }}</td>
                                        <td> 
                                            <a href="{{ url('/lesson/'.$lessons->id.'/edit') }}" class="btn btn-link">Edit</a>
                                            {!! Form::open(['method'=>'delete', 'url' => ['course', $course->id]]) !!}
                                                <button type="submit" class="btn btn-link">
                                                    Remove
                                                </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>   
                                @endforeach
                            </tbody>
                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection