<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EdProject</title>
    <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Signika:400,600,300,700' rel='stylesheet' type='text/css'>

</head>
<body class="signupbg">
  <!-- Static navbar -->
    <header class="head">
        <section class="navbar navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <i class="fa fa-list"></i>
                    </button>
                    <a class="navbar-brand" href="#">
                        <div class="logo"><img src="{{ asset('assets/images/logo.png') }}"></div>
                    </a>
                </div>
                <nav id="navbar" class="navbar-collapse collapse header-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/') }}">HOME</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="{{ url('/register') }}">SIGNUP</a></li>
                        <li><a href="{{ url('/login') }}">SIGNIN</a></li>
                    </ul>
                </nav><!--/.nav-collapse -->
            </div>
        </section>
    </header>

<section class="container signup-form">
    <div class="col-md-12">
        <header>
            <h3>Start Learning today....</h3>
            <h1>Signup</h1>
        </header>
<!-- Custom "Edit Profile Page" built with the ProfilePress WordPress plugin - http://profilepress.net -->
        <style type="text/css">
         /* css class for the registration form generated errors */
        </style>
        {!! Form::open(['url'=>'/register']) !!}
            <div class="form-horizontal">
                <div class="form-group">
                    <div class="col-md-offset-1 col-md-11">
                        <h1>Your basic information</h1>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-1 col-md-5">
                        {!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Enter Name', 'style'=>'width: 98%;']) !!}
                    </div>
                    <div class="col-md-5">
                        {!! Form::text('address', null,['class'=>'form-control', 'placeholder'=>'Enter Address', 'style'=>'width: 98%;']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-1 col-md-5">
                        {!! Form::text('phone', null,['class'=>'form-control', 'placeholder'=>'Enter Phone', 'style'=>'width: 98%;']) !!}
                    </div>
                    <div class="col-md-5">
                        {!! Form::text('job_title', null,['class'=>'form-control', 'placeholder'=>'Enter Job Title', 'style'=>'width: 98%;']) !!}
                    </div>   
                </div>
                <div class="form-group">
                    <div class="col-md-offset-1 col-md-10">
                        {!! Form::textarea('biography', null,['class'=>'form-control', 'placeholder'=>'Enter Biography', 'style'=>'width: 99%;']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-1 col-md-11">
                        <h1>Your account credentials</h1>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-1 col-md-5">
                        {!! Form::text('username', null,['class'=>'form-control', 'placeholder'=>'Enter Username', 'style'=>'width: 98%;']) !!}
                    </div>
                    <div class="col-md-5">
                        {!! Form::email('email', null,['class'=>'form-control', 'placeholder'=>'Enter Email address', 'style'=>'width: 98%;']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-1 col-md-5">
                        <input id="password" type="password" class="form-control" name="password" style="width: 98%;" placeholder="Enter Password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="col-md-5">
                       <input id="password-confirm" type="password" class="form-control" name="password_confirmation" style="width: 98%;" placeholder="Enter Confirm Password">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-1 col-md-10">
                        <h1>You are also agree to our Terms of Service and our Privacy Policy.</h1>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-1 col-md-10">
                        {!! Form::submit('Signup', ['class' => 'btn btn-default btn-md', 'id' => 'submit-button']) !!}
                        <!-- <input type="submit" name="reg_submit" title="" value="Signup" id="submit-button" class="btn btn-default btn-md"> -->
                        <h1>Have an account? <a href="{{ url('/login') }}" title="" class="" id="">Login</a></h1>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</section>

<footer class="foot wth">
    <section class="navbar-static-bottom">
      <div class="container">
        <div class="col-md-6 copyright">       
            <p>Copyright  2014 @edproject. All rights reserved </p>
        </div>
        <nav class="col-md-6 social-icon">
            <ul class="navbar-right">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-feed"></i></a></li>
                <li><a href="#"><i class="fa fa-github"></i></a></li>
            </ul>
        </nav>
      </div>
    </section>
</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>