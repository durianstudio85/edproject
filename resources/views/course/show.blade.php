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
                   <div class="col-md-3">
                        <table class="table">
                            <tr>
                                <td><strong>Name</strong></td>
                                <td>{{ $course->name }}</td>
                            </tr>
                            <tr>
                                <td><strong>slug</strong></td>
                                <td>{{ $course->slug }}</td>
                            </tr>
                            <tr>
                                <td><strong>Name</strong></td>
                                <td>{{ $course->description }}</td>
                            </tr>
                        </table>
                        <a href="{{ url('/course/create') }}" class="btn btn-info">Edit</a>
                   </div>
                   <div class="col-md-7">
                        <a href="{{ url('/course/'.$course->id.'/lesson/create') }}" class="btn btn-info">Add Lesson</a>
                        <table class="table">
                            <thead>
                                <th>Course ID</th>
                                <th>Title</th>
                                <th>Discription</th>
                                <th>Action</th>
                            </thead>
                           @foreach($lesson as $lessons)
                                <tr>
                                    <td>{{ $lessons->courses_id }}</td>
                                    <td>{{ $lessons->title }}</td>
                                    <td>{{ $lessons->short_description }}</td>
                                    <td> <a href="{{ url('/course/'.$lessons->courses_id.'/lesson/'.$lessons->id) }}">Edit</a></td>
                                </tr>   
                            @endforeach
                        </table>

                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection