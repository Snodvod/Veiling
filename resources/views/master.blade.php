<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Art Auction</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
</head>
<body>
	<div class="container-fluid">
		<div id="header" class="row">
			<div class="col-lg-1 col-lg-offset-2">
				<img class="logo" src="{{asset('img/logo.jpg') }}">
			</div>
			@if(Auth::check())
			<div class="col-lg-2 uppernav">
				<img src="{{ asset('img/menu.jpg') }}" alt="watchlist">
				<a class="nav-elements" href="#">Watchlist</a>
				<img src="{{ asset('img/user.jpg') }}" alt="user">
				<a class="nav-elements" href="#">Profile</a>
				<a class="nav-elements" id="logout" href="/auth/logout">Logout</a>
			</div>
			@else
			<div class="col-lg-1 uppernav">
				<a class="nav-elements" id="register" href="auth/register">Register</a>
				<a class="nav-elements" id="login" href="#">Login</a>
			</div>
			<div id="facebook" class="col-lg-1 uppernav">
				Or use:
				<a href="auth/facebook"><img width="30" height="30" src="{{ asset('img/facebook.png') }}" alt="facebook"></a>
			</div>
			@endif
			<div id="loginform" class="col-lg-4 uppernav">
				<form action="/auth/login" method="POST">
					{!! csrf_field() !!}
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email">
					</div>
					<div id="password" class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-default">Login</button>
					<a href="/password/email">Vergeten?</a>
				</form>
			</div>
			<div class="search col-lg-2 col-lg-offset-7 input-group">
					<input type="text" class="form-control" placeholder="Search">
					<div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
				</div>
		</div>
		<div class="header-strip row">
			<div class="col-lg-4">
				<ul class="nav nav-tabs">
					<li><a href="/home">Home</a></li>
					<li><a href="/art">Art</a></li>
					<li><a href="#">iSearch</a></li>
					@if(Auth::check())
					<li><a href="/auctions">MyAuctions</a></li>
					<li><a href="/mybids">MyBids</a></li>
					@else
					<li><a href="#">MyAuctions</a></li>
					<li><a href="#">MyBids</a></li>
					@endif
					<li><a href="/contact">Contact</a></li>
				</ul>
			</div>
		</div>
		@if(Request::path() == '/' || Request::path() == 'home')
		<div class="row">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>
			 
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="img/caroussel.jpg" alt="Psychedelica">
			      <div class="carousel-caption">
			          <h3>Flash</h3>
			      </div>
			    </div>
			    <div class="item">
			      <img src="img/caroussel2.jpg" alt="Psychedelica dos">
			      <div class="carousel-caption">
			          <h3>Flash Flash</h3>
			      </div>
			    </div>
			    <div class="item">
			      <img src="img/caroussel3.jpg" alt="MC Escher">
			      <div class="carousel-caption">
			          <h3>Metamorphose - MC Escher</h3>
			      </div>
			    </div>
			  </div>
			 
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
			</div>
		</div>
		<div class="row">
			<div class="carousel-content col-lg-8 col-lg-offset-2">
				<p>The prairie, across which the sledge was moving in a straight line, was as flat as a sea. It seemed like a vast frozen lake. The railroad which ran through this section ascended from the south-west to the north-west by Great Island, Columbus, an important Nebraska town, Schuyler, and Fremont, to Omaha. It followed throughout the right bank of the Platte River. The sledge, shortening this route, took a chord of the arc described by the railway. Mudge was not afraid of being stopped by the Platte River, because it was frozen. The road, then, was quite clear of obstacles, and Phileas Fogg had but two things to fear—an accident to the sledge, and a change or calm in the wind.</p>
			</div>
		</div>
		@else
		<div class="row">
			<div class="col-lg-12 spotlight"></div>
		</div>
		<div class="row">
			<div class="col-lg-2 col-lg-offset-8 spotlight-content">
				<h2>Forget About it</h2>
				<p> "forget about it" is, like, if you agree with someone, you know, like "raquel welch is one great piece of ass. forget about it!" but then, if you disagree, like "a lincoln is better than a cadillac? forget about it!"...</p>
				<p><b>Price: € 0.05</b></p>
				<div class="visit"><h3><a href="">Visit Auction</a></h3><span class="glyphicon glyphicon-chevron-right"></span></div>
			</div>
		</div>
		@endif


		<div class="content">
			@yield('content')
		</div>


		<div id="map" class="row">
			<div class="col-lg-2 col-lg-offset-2">
				<h4>Account</h4>
				<ul>
					<li><a href="auth/login">Login</a></li>
					<li><a href="auth/register">Register</a></li>
				</ul>
				<h4>Help</h4>
				<ul>
					<li><a href="#">Terms of Service</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="FAQ">FAQ</a></li>
					<li><a href="contact">Contact Us</a></li>
					<li><a href="#">About us</a></li>
				</ul>
				<h4>Languages</h4>
				<ul>
					<li><a href="#">English</a></li>
					<li><a href="#">Nederlands</a></li>
				</ul>
			</div>
			<div class="col-lg-2">
				<h4>Price</h4>
				<ul><li><a href="/art/filter/price/5000">Up to 5000</a></li>
				<li><a href="/art/filter/price/10000">5000-10000</a></li>



				<li><a href="/art/filter/price/25000">10000-25000</a></li>
				<li><a href="/art/filter/price/50000">25000-50000</a></li>
				<li><a href="/art/filter/price/100.000">50000-100000</a></li>
				<li><a href="/art/filter/price/more">Above</a></li></ul>

				<h4>Era</h4>
				<ul>
					<li><a href="/art/filter/era/pre">Pre-War</a></li>
					<li><a href="/art/filter/era/4060">40's-60's</a></li>
					<li><a href="/art/filter/era/6080">60's-80's</a></li>
					<li><a href="/art/filter/era/now">90's-Present</a></li>
				</ul>
				<h4>Endings</h4>
				<ul>
					<li><a href="/art/filter/end/week">This week</a></li>
					<li><a href="/art/filter/end/new">Newly listed</a></li>
					<li><a href="/art/filter/end/now">Purchase Now</a></li>
				</ul>
			</div>
			<div id="right" class="col-lg-offset-2 col-lg-2">
				<div class="verticalline">
				</div>
				<h4>Find what you need</h4>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search">
					<div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
				</div>
			</div>
		</div>
		{{-- <div class="footer row">
			
		</div> --}}

		<footer class="footer row">
	      	<div class="wrapper">
	        	<div class="col-lg-1 col-lg-offset-2">
				<img class="logo" src="{{ asset('img/logo.jpg') }}" alt="logo">
			</div>
			<div class="col-lg-4">
				<ul class="nav nav-tabs">
					<li><a href="home">Home</a></li>
					<li><a href="art">Art</a></li>
					<li><a href="#">iSearch</a></li>
					<li><a href="myactions">MyAuctions</a></li>
					<li><a href="mybids">MyBids</a></li>
					<li><a href="contact">Contact</a></li>
				</ul>
			</div>
	      	</div>
	    </footer>
	</div>
</body>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>
</html>