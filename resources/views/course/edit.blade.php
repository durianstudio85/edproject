@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="header-section" style="background-image: url('{{ asset('assets/images/header-main.jpg') }}')">
            <div class="row">
                 <div class="col-md-10  header-all">
                    <div class="course-header">
                        <h3>CHOOSE OUR</h3>
                        <h1>SPECIALIZED COURSES</h1>
                    </div>   
                </div>               
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 content-all">
                <div class="">

                </div>
                <h1 class="pad-title">Edit Course</h1>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        {!! Form::model($course, ['method'=>'patch', 'action'=>['CourseController@update', $course->id], 'files'=>'true']) !!}
                            <div class="panel panel-default">
                                <div class="panel-heading">Course Information</div>
                                <div class="panel-body">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('name', 'Title', ['class' => 'awesome']) !!}
                                            {!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Enter Name', 'value'=> $course->name]) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('photo', 'Course Photo', ['class' => 'awesome']) !!}
                                            {!! Form::file('photo', ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {!! Form::label('description', 'Description', ['class' => 'awesome']) !!}
                                            {!! Form::textarea('description', null,['class'=>'form-control', 'placeholder'=>'Description', 'value'=> $course->description]) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="panel panel-default">
                                <div class="panel-heading">Instructor Information</div>
                                <div class="panel-body">
                                    <div class="col-sm-6">
                                        <div class="form-group"> 
                                            {!! Form::label('instructor_name', 'Name', ['class' => 'awesome' , 'value'=> $course->instructor_name]) !!}
                                            {!! Form::text('instructor_name', null,['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('instructor_img', 'Intructor Photo', ['class' => 'awesome']) !!}
                                            {!! Form::file('instructor_img', ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {!! Form::submit('Save', ['class' => 'btn btn-custom']) !!}
                            <a href="{{ url('/courses') }}" class="btn btn-default">Cancel</a>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection