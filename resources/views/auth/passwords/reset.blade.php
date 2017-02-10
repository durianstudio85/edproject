<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="We believe education is a right not a privilage">
    <title>EdProject</title>
    <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Signika:400,600,300,700' rel='stylesheet' type='text/css'>

</head>
<body>
    <div class="signupbg">
    <!-- Static navbar -->
        <header class="head">
            <section class="navbar navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <i class="fa fa-list"></i>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}">
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



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-refresh"></i> Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

