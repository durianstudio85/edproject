<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EdProject</title>
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
                    <li><a href="{{ url('/about') }}">ABOUT</a></li>
                    <li><a href="{{ url('/register') }}">SIGNUP</a></li>
                    <li><a href="{{ url('/login') }}">SIGNIN</a></li>
                </ul>
            </nav><!--/.nav-collapse -->
        </div>
    </section>
</header>
<div class="container">
    <div class="col-md-12  signup-form  ">
        <header>
            <h3>Start Learning today....</h3>
            <h1>Signin</h1>
        </header>
        <!-- Custom Login form built with the ProfilePress WordPress plugin - http://profilepress.net -->
        <style type="text/css">

        </style>

        <form role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class="form-horizontal">
                <section>
                    <div class="form-group">
                        <div class="col-md-offset-1 col-md-5">
                            <h1>Your account credentials</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-5">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" style="width: 97%;" placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="col-md-5">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" style="width: 97%;">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <input type="submit" name="login_submit" title="" class="btn btn-default btn-md" id="login-button" value="Login">
                    <p>
                    </p><h1>Don't have an account? <a href="{{ url('/register') }}" title="" class="" id="">Signup</a></h1>
                    </div>
                    </div>
                </section>
            </div>
        </form>
    </div>

 </div> 

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