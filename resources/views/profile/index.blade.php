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
                <h3 style="color: #01ba8e; font-weight: bold;">Basic Information </h3>
                <hr style="border-top: 2px solid #eee;">
                <table class="table table-profile-content">
                    <tr>
                        <td><strong>Name:</strong></td>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Job Title:</strong></td>
                        <td>{{ Auth::user()->job_title }}</td>
                    </tr>
                    <tr>
                        <td><strong>Birthday:</strong></td>
                        <td>{{ Auth::user()->birthday }}</td>
                    </tr>
                    <tr>
                        <td><strong>Address:</strong></td>
                        <td>{{ Auth::user()->address }}</td>
                    </tr>
                    <tr>
                        <td><strong>Email:</strong></td>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Phone:</strong></td>
                        <td>{{ Auth::user()->phone }}</td>
                    </tr>
                    <tr>
                        <td><strong>Biography:</strong></td>
                        <td>{{ Auth::user()->biography }}</td>
                    </tr>
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
            </div>
        </div>
    </div>
@endsection