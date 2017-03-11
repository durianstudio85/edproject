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
                <h1 class="pad-title">Admin Section/Control Page</h1>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        @if( Request::path() == 'categories/create' )
                            {!! Form::open(['url'=>'categories/create']) !!}
                                <div class="panel panel-default">
                                    <div class="panel-heading">Create Categories</div>
                                    <div class="panel-body">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                {!! Form::label('name', 'Name', ['class' => 'awesome']) !!}
                                                {!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                                            </div>
                                        </div>
                                        {!! Form::submit('Create', ['class' => 'btn btn-custom']) !!}
                                        <a href="{{ url('/courses') }}" class="btn btn-default">Cancel</a>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        @else
                            {!! Form::model($category, ['method'=>'patch', 'action'=>['CategoryController@update', $category->id],'files'=>'true']) !!}
                                <div class="panel panel-default">
                                    <div class="panel-heading">Create Categories</div>
                                    <div class="panel-body">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                {!! Form::label('name', 'Name', ['class' => 'awesome']) !!}
                                                {!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                                            </div>
                                        </div>
                                        {!! Form::submit('Save', ['class' => 'btn btn-custom']) !!}
                                        <a href="{{ url('/categories/create') }}" class="btn btn-default">Cancel</a>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        @endif

                            <div class="panel panel-default">
                                <div class="panel-heading">Categories List</div>
                                <div class="panel-body">
                                    <div class="col-sm-12">
                                        <table class="table">
                                            <thead>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                @foreach ( $allCategory as $list )
                                                <tr>
                                                    <td>{{ $list->name }}</td>
                                                    <td><a href="{{ url('/categories/'.$list->id.'/edit') }}">Edit</a></td>
                                                </tr>
                                                @endforeach

                                            </tbody>


                                        </table>
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection