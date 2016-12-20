<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EdProject</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }} ">
	<link href='https://fonts.googleapis.com/css?family=Signika:400,600,300,700' rel='stylesheet' type='text/css'>
</head>
<body class="indexbg">
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
                <li><a href="{{ url('/') }}">ABOUT</a></li>
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
				<button>GET STARTED</button>
				<button>HOW IT WORKS</button>		
			</div>
		</center>
		
	</section>
</content>
<footer class="foot">
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

    <script src="js/bootstrap.min.js"></script>
	
</body>
</html>