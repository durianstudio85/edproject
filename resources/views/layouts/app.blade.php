<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="Choose our specialized courses">
    <title>Edproject</title>
    <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon">
    <!-- <link rel="icon" type="image/png" href="" /> -->
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }} ">
    <link href="{{ asset('assets/css/style2.css') }}" rel="stylesheet">

    <script>
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

         ga('create', 'UA-44336723-1', 'auto');
         ga('send', 'pageview');

    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        
    </style>
    <script>
        $(document).ready(function() {
            // $(".navbar-nav").height();

            if ($( ".lesson-video" ).height() > 1) {
                $(".navbar-nav").height( $( ".content-all" ).height() + $( ".lesson-video" ).height());
            };


            if ($( ".content-all" ).height() > 500){
                $(".navbar-nav").height( $( ".content-all" ).height());
            };
            
            // $(".navbar-brand").click(function(){
            //     alert("Height of div: " + $(".content-all").height());
            // }); 
        });
    </script>


</head>
<body id="app-layout">
    <div class="navbar navbar-inverse navbar-fixed-left">
        <div class="nav-header">
            <center>
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo1.png') }}"></a>
                <!-- {{ url('/') }} -->
            </center>
            <div class="user">
                <center>
                    <div class="user-avatar">
                        @if ( !empty(Auth::user()->avatar) )
                            <img src="{{ Auth::user()->avatar }}" width="200" height="200" alt="">
                        @else
                            <img src="{{ asset('upload/user.jpg') }}" width="200" height="200" alt="">
                        @endif
                    </div>
                    <br><br>
                    <h3>{{ Auth::user()->name }}</h3>
                </center>
            </div>
        </div>
        <center>
            <input type="text" class="textbox-search" placeholder="Search">
        </center>
        <ul class="nav navbar-nav">
            <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Sub Menu1</a></li>
                    <li><a href="#">Sub Menu2</a></li>
                    <li><a href="#">Sub Menu3</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Sub Menu4</a></li>
                    <li><a href="#">Sub Menu5</a></li>
                </ul>
            </li> -->
            @if(Auth::user()->user_role == 'admin')
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            @endif
            <li><a href="{{ url('/mycourses') }}">My Courses</a></li>
            <li><a href="{{ url('/courses') }}">Browse Courses</a></li>
            <li><a href="{{ url('/profile') }}">Settings</a></li>
             <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            </li>
        </ul>
    </div>
    @yield('content')


    <!-- <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script> -->



    <!-- JavaScripts -->
    <footer class="foot">
        <section class="navbar-static-bottom">
          <div class="container">
            <div class="col-md-6 copyright">
                
                <p>Copyright  2017 @edproject. All rights reserved </p>
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>