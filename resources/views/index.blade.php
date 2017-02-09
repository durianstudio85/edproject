<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="">
	<meta name="description" content="We believe education is a right not a privilage">
	<title>EdProject</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon">
	<!-- <link rel="icon" type="image/png" href="{{ asset('assets/images/edprojectfavicon.png') }}" /> -->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }} ">
	<link href='https://fonts.googleapis.com/css?family=Signika:400,600,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
  <!-- Static navbar -->
  	<div class="indexbg">
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
		<content class="container">
			<section class="col-md-6 col-md-offset-6 caption">
				<div class="caption-wrap">
					<img src="{{ asset('assets/images/text1.png') }}" class="caption-text1 img-responsive">
					<img src="{{ asset('assets/images/text2.png') }}" class="caption-text2 img-responsive">
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
	</div>
	<div class="course-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Courses</h1>
				</div>
			</div>
			<div class="row">
				@foreach($courses as $course)
					<div class="col-md-3 col-sm-6">
	                    <div class="course-list-box-single">
	                    	<div class="course-list-box-border">
		                        <div class="course-box-img">
		                            <img src="{{ asset('upload/'.$course->photo) }}"/><!-- <img src="{{ asset('assets/images/laravel5.2.png') }}" class="course-img"> -->
		                        </div>
		                        <div class="course-box-content">
		                            <a href="{{ url('/courses/'.$course->id) }}">{{ $course->name }}</a>
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
			</div>
			<div class="row">
				<div class="col-md-12">
					<a href="{{ url('/courses') }}">
						<button class="btn-browse-course">Browse courses</button>
					</a>
				</div>
			</div>
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