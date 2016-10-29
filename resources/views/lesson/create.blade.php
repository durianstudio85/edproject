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
                        <a href="{{ url('/course/'.$course->id.'/edit') }}" class="btn btn-info">Edit</a>
                   </div>
                   <div class="col-md-7">
                        {!! Form::open(['url'=>'course/'.$course->id.'/lesson/create']) !!}
                        {!! Form::hidden('courses_id', $course->id); !!}
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::text('title', null,['class'=>'form-control', 'placeholder'=>'Title']) !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::text('link', null,['class'=>'form-control', 'placeholder'=>'Youtube link']) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::textarea('short_description', null,['class'=>'form-control', 'placeholder'=>'Description']) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                {!! Form::submit('Save', ['class' => 'btn btn-info']) !!}
                                <a href="{{ url('/course/'.$course->id.'/edit') }}" class="btn btn-default">Cancel</a>
                            </div>
                        {!! Form::close() !!}

                        <br>
                        <br>
                        <br>
                        <br>
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
                                    <td> <a href="{{ url('/course/'.$lessons->courses_id.'/lesson/'.$lessons->id) }}" ><button type="button" class="btn btn-link">Edit</button></a>
                                        {!! Form::open(['method'=>'delete', 'url' => ['course', $course->id]]) !!}
                                            <button type="submit" class="btn btn-link">
                                                Remove
                                            </button>
                                        {!! Form::close() !!}

                                    </td>
                                </tr>   
                            @endforeach
                        </table>

                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection