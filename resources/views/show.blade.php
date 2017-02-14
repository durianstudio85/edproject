<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="We believe education is a right not a privilage">
    <title>Edproject | {{ ucfirst(Request::path()) }} </title>
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
            <div class="col-md-offset-1 col-md-10 signup-form  ">
                <div class="col-md-12">
                    <p class="description-link">
                        {!! $first_lesson->link  !!}
                    </p>
                </div>
                <header>
                    <div class="col-md-6">
                        <h1 class="thumbnails-title">{{ $courses->name }}</h1>
                    </div>
                    <div class="col-md-6">
                        <h3 class="thumbnails-author"><img src="http://localhost/github/laravel/edproject/public/upload/czzbWVJUKSgONX4pXapEhtmlandcss.jpg">Instructor: {{ $courses->instructor_name }}</h3>
                    </div>
                    <form>
                        <div class="col-md-12">
                            <h1>{{ $courses->description }}</h1>
                        </div>
                        <div class="col-md-12">
                            <table class="table thumbnails-table">
                                @foreach ( $lessonItems as $items)
                                    <tr>
                                        <td><h1>{{ $items->title }}</h1></td>
                                        <td style="width: 56px;text-align:right;"><h1>{{ $items->duration }}</h1></td>
                                    </tr>
                                @endforeach
                                    <tr>
                                        <td><a href="#" class="signin-btn" style="font-size: 26px;">View More</a></td>
                                    </tr>
                            </table>
                            
                        </div>
                    </form>
                </header>
                <div class="col-md-12">
                    <center>
                    <a href="{{ url('/courses/'.$courses->id) }}"> <input type="button" name="login_submit" title="" class="btn btn-default btn-md btn-custom-login" id="login-button" value="Enroll Now"></a>
                    </center>
                </div>
                <!-- Custom Login form built with the ProfilePress WordPress plugin - http://profilepress.net -->
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