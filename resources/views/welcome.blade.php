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
            
                <div class="col-md-8">
                    <table class="table table-profile">
                        <thead>
                            <tr>
                                <th>Basic Information</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <table class="table table-profile-content">
                                        <tbody>
                                            <tr>
                                                <td width="40%">Name</td>
                                                <td></td>
                                            </tr>   
                                            <tr>
                                                <td>Job Title</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Birthday</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td><a href="mailto:"></a><a></a></td>
                                            </tr>
                                            <tr>
                                                <td>Phone</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Biography</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>        
                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <a href="" class="btn btn-primary">Edit</a>
               
            </div>
        </div>
    </div>
@endsection
