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
                    <h1>Course 
                        <a href="{{ url('/course/create') }}" class="btn btn-info">Create</a>
                    </h1>
                    <hr>
                    @foreach($courses as $course)
                    <div class="row">
                        <div class="col-md-3">
                            <center><img src="{{ asset('assets/images/laravel5.2.png') }}" style="width: 80%;"></center>
                        </div>
                        <div class="col-md-3">
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->slug }}</td>
                            <td>{{ $course->description }}</td>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('/course/'.$course->id) }}" class="btn btn-link">View</a>&nbsp;
                            <a href="{{ url('/course/'.$course->id.'/edit') }}" class="btn btn-link">Edit</a>&nbsp;
                            
                                {!! Form::open(['method'=>'delete', 'url' => ['course', $course->id]]) !!}
                                    <button type="submit" class="btn btn-link">
                                        delete
                                    </button>
                                {!! Form::close() !!}
                            
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection