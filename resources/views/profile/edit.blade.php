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
                <h3 style="color: #01ba8e; font-weight: bold;">Basic Information </h3>
                <hr style="border-top: 2px solid #eee;">
                {!! Form::model($user, ['method'=>'patch', 'action'=>['ProfileController@update', $user->id]]) !!}
                <table class="table table-profile-content">
                 <div class="form-group">    
                    <tr>
                        <td><strong>Name:</strong></td>
                        <td>{!! Form::text('name', $user->name,['class'=>'form-control', 'placeholder'=>'Title']) !!}</td>
                    </tr>
                    <tr>
                        <td><strong>Job Title:</strong></td>
                        <td>{!! Form::text('job_title', $user->job_title,['class'=>'form-control', 'placeholder'=>'Title']) !!}</td>
                    </tr>
                    <tr>
                        <td><strong>Birthday:</strong></td>
                        <td>{{ Auth::user()->birthday }}</td>
                        
                    </tr>
                    <tr>
                        <td><strong>Address:</strong></td>
                        <td>{!! Form::text('address', $user->address,['class'=>'form-control', 'placeholder'=>'Title']) !!}</td>
                    </tr>
                    <tr>
                        <td><strong>Email:</strong></td>
                        <td>{!! Form::text('email', $user->email,['class'=>'form-control', 'placeholder'=>'Title']) !!}</td>
                    </tr>
                    <tr>
                        <td><strong>Phone:</strong></td>
                        <td>{!! Form::text('phone', $user->phone,['class'=>'form-control', 'placeholder'=>'Title']) !!}</td>
                    </tr>
                    <tr>
                        <td><strong>Biography:</strong></td>
                        <td>{!! Form::textarea('biography', $user->boigraphy,['class'=>'form-control', 'placeholder'=>'Title']) !!}</td>
                    </tr>
                </div>
                </table>
                <h3 style="color: #01ba8e; font-weight: bold;">Social Media</h3>
                <hr style="border-top: 2px solid #eee;">
                <table class="table table-profile-content">
                    <tr>
                        <td><strong>Facebook:</strong></td>
                        <td>https://www.facebook.com</td>
                    </tr>
                    <tr>
                        <td><strong>Twitter:</strong></td>
                        <td>https://www.twitter.com</td>
                    </tr>

                </table>
                {!! Form::submit('Save', ['class' => 'btn btn-custom']) !!}
                <a href="{{ url('/profile/') }}" class="btn btn-default">Cancel</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection