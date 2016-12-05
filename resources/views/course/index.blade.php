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
                    <div class="row course-list">
                        <div class="col-md-3">
                            <center>
                                <div>
                                    <img src="{{ asset('assets/images/laravel5.2.png') }}" class="course-img">
                                </div>
                            </center>
                        </div>
                        <div class="col-md-2">
                            <table>
                                <tr>
                                    <td>{{ $course->name }}</td>        
                                </tr>
                                <tr>
                                    <td>{{ $course->slug }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-5">
                            <p>{{ $course->description }}</p>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ url('/course/'.$course->id) }}" class="btn btn-info">View</a>&nbsp;
                            <a href="{{ url('/course/'.$course->id.'/edit') }}" class="btn btn-info">Edit</a>&nbsp;
                            {!! Form::open(['method'=>'delete', 'url' => ['course', $course->id]]) !!}
                                <button type="submit" class="btn btn-danger">
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