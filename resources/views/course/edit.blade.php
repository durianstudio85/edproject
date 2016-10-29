@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="header-section" style="background-image: url('{{ asset('assets/images/header-main.jpg') }}')">
            <div class="row">
                <div class="col-md-4">
                    <h1>Sample</h1>
                </div>
                <div class="col-md-6">
                    <h1>Sample</h1>
                </div>         
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <h1>Admin Section/Control Page</h1>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        {!! Form::model($course, ['method'=>'patch', 'action'=>['CourseController@update', $course->id]]) !!}
                            <div class="form-group">
                                {!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Enter Name', 'value'=> $course->name]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::textarea('description', null,['class'=>'form-control', 'placeholder'=>'Description']) !!}
                            </div>

                            {!! Form::submit('Save', ['class' => 'btn btn-info']) !!}
                            <a href="{{ url('/course') }}" class="btn btn-default">Cancel</a>
                        {!! Form::close() !!}
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                            </thead>
                            <tr>
                                <td>{{ $course->slug }}</td>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->description }}</td>
                            </tr>
                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection