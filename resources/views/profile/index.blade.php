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
                <table class="table table-profile">
                    <thead>
                        <tr><th>Basic Information</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>
                            <table class="table table-profile-content">
                                <thead>
                                    <tr>
                                        <th>Course name</th>
                                        <th>Course Slug</th>
                                        <th>Course Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($courses as $course)
                                        <tr>
                                            <td>{{ $course->name }}</td>
                                            <td>{{ $course->slug }}</td>
                                            <td>{{ $course->description }}</td>
                                            <td><a href="{{ url('/course/'.$course->id) }}" class="btn btn-link">View</a>&nbsp;</td>
                                            <td><a href="{{ url('/course/'.$course->id.'/edit') }}" class="btn btn-link">Edit</a>&nbsp;</td>
                                            <td>
                                                {!! Form::open(['method'=>'delete', 'url' => ['course', $course->id]]) !!}
                                                    <button type="submit" class="btn btn-link">
                                                        delete
                                                    </button>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>   
                                    @endforeach
                                </tbody>
                            </table>        
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection