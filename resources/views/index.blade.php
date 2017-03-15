<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="">
	<meta name="description" content="We believe education is a right not a privilage">
	@if( Request::path() == '/')
        <title>Edproject | Home </title>
    @else
        <title>Edproject | {{ ucfirst(Request::path()) }} </title>
    @endif
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon">
	<!-- <link rel="icon" type="image/png" href="{{ asset('assets/images/edprojectfavicon.png') }}" /> -->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }} ">
	<link href='https://fonts.googleapis.com/css?family=Signika:400,600,300,700' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

         ga('create', 'UA-44336723-1', 'auto');
         ga('send', 'pageview');

    </script>

    <script>

        $(document).ready(function() {
            // $(".navbar-nav").height();
                $(".indexbg").height( $( window ).height() );
            // $(".navbar-brand").click(function(){
            //     alert("Height of div: " + $(".content-all").height());
            // }); 
        });
    

    </script>
</head>
<body>
  <!-- Static navbar -->
  	<div  {{{ ( Request::is('/') ? 'class=indexbg' : 'class=categoriesbg') }}}>
		<header class="head">
		    <section class="navbar navbar navbar-static-top">
			    <div class="container">
			        <div class="navbar-header">
				        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				           <i class="fa fa-list"></i>
				        </button>
				        <a class="navbar-brand" href="{{ url('/') }}">
				        	@if( Request::path() == '/' )
				          	<div class="logo"><img src="{{ asset('assets/images/logo.png') }}"></div>
				          	@else
				          		<div class="logo"><img src="{{ asset('assets/images/logo-white.png') }}"></div>
				          	@endif
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
		@if( Request::path() == '/')
			<content class="container">
				<section class="col-md-6 col-md-offset-6 caption">
					<div class="caption-wrap">
						<img src="{{ asset('assets/images/text1.png') }}" class="caption-text1 img-responsive">
						<img src="{{ asset('assets/images/education.png') }}" class="caption-text2 img-responsive">
						<img src="{{ asset('assets/images/text3.png') }}" class="caption-text3 img-responsive">
					</div>
				</section>
				<section class="col-md-6 col-md-offset-6 caption">
					<center>
						<div class="button-wrap">
							<a href="{{ url('/login') }}"><button>LOGIN</button></a>
							<a href="{{ url('/register') }}"><button>SIGNUP</button></a>
						</div>
					</center>
				</section>
			</content>
		@else
			<section class="col-md-12 caption">
				<div class="caption-wrap">
					
					<h2>We believe education is a right, not a priviledge</h2>
					<center>
						{!! Form::open(['url'=>'/q','files'=>'true']) !!}
						<div class="input-group dg-banner-input-group" style="width: 590px;">
		                    <input required="required" class="form-control input-lg dg-banner-input" placeholder="Search Course" name="q" type="text">
		                    <!-- <input type="text" class="form-control input-lg dg-banner-input" placeholder="Find logo, banner, artworks, etc...."> -->
		                    <span class="input-group-btn gd-banner-button">
		                        <button class="btn btn-default btn-lg dg-banner-btn" type="submit">SEARCH</button>
		                   </span>
		                    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
		                </div>
		                {!! Form::close() !!}
	                </center>
					
				</div>
			</section>



		@endif
	</div>
	<div class="course-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Courses</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="sidebar-front">
						<ul>
							@foreach( $categories as $list)
							<li><a href="{{ url('/categories/'.str_slug($list->name, '-').'/'.$list->id ) }}"><p>{{ $list->name }}</p></li>
							@endforeach
						</ul> 
					</div>
				</div>
				<div class="col-md-9">
					@foreach($courses as $course)
						<div class="col-md-4 col-sm-6">
		                    <div class="course-list-box-single">
		                    	<div class="course-list-box-border">
			                        <div class="course-box-img">
			                            <img src="{{ asset('upload/'.$course->photo) }}"/><!-- <img src="{{ asset('assets/images/laravel5.2.png') }}" class="course-img"> -->
			                        </div>
			                        <div class="course-box-content">
			                        	@if (Auth::guest())
			                        		<a href="{{ url('/'.$course->slug.'/'.$course->id) }}">{{ $course->name }}</a>
		                                @else
		                                    <a href="{{ url('/courses/'.$course->id) }}">{{ $course->name }}</a>
		                                @endif



			                            <!-- <a href="{{ url('/courses/'.$course->id) }}">{{ $course->name }}</a> -->
			                            <p>By {{ $course->instructor_name }}</p>
			                        </div>
			                        <div class="course-box-status">
			                            <div class="course-box-status-user-count">
			                                <i class="fa fa-users fa-lg" aria-hidden="true"></i>&nbsp;
			                                    {{ App\Enroll::where('course_id','=',$course->id)->count() }}
			                            </div>
			                            <div class="course-box-status-price">
			                                <p>FREE</p>
			                            </div>
			                        </div>
		                    	</div>
		                    </div>
	                    </div>
	                @endforeach
	                <div class="col-md-12">
	                	<center>{{ $courses->links() }}</center>
	                </div>
	                
	            </div>
			</div>
			<!-- <div class="row">
				<div class="col-md-12">
					<a href="{{ url('/courses') }}">
						<button class="btn-browse-course">Browse courses</button>
					</a>
				</div>
			</div> -->
		</div>
	</div>
	<footer class="foot foot-front">
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
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>