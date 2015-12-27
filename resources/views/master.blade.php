<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Art Auction</title>
	<link rel="stylesheet" href="css/app.css">
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
</head>
<body>
	<div class="container-fluid">
		<div id="header" class="row">
			<div class="col-lg-1 col-lg-offset-2">
				<img class="logo" src="img/logo.jpg">
			</div>
			@if(Auth::check())
			<div class="col-lg-2 uppernav">
				<img src="img/menu.jpg" alt="watchlist">
				<a class="nav-elements" href="#">Watchlist</a>
				<img src="img/user.jpg" alt="user">
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
				<a href="auth/facebook"><img width="30" height="30" src="img/facebook.png" alt="facebook"></a>
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
					<li><a href="home">Home</a></li>
					<li><a href="art">Art</a></li>
					<li><a href="#">iSearch</a></li>
					<li><a href="myactions">MyAuctions</a></li>
					<li><a href="mybids">MyBids</a></li>
					<li><a href="contact">Contact</a></li>
				</ul>
			</div>
		</div>
		@yield('content')
	
		<div id="map" class="row">
			<div class="col-lg-2 col-lg-offset-3">
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
					<li><a href="lang/english">English</a></li>
					<li><a href="lang/dutch">Nederlands</a></li>
				</ul>
			</div>
			<div class="col-lg-2">
				<h4>Style</h4>
				<ul>
					<li><a href="">Get styles from DB</a></li>
				</ul>
				<h4>Style</h4>
				<ul>
					<li><a href="">Get art styles from DB</a></li>
				</ul>
			</div>
			<div class="col-lg-2">
				<h4>Price</h4>
				<ul><li><a href="#">Up to 5000</a></li>
				<li><a href="#">5000-10000</a></li>
				<li><a href="#">10000-25000</a></li>
				<li><a href="#">25000-50000</a></li>
				<li><a href="#">50000-100000</a></li>
				<li><a href="#">Above</a></li></ul>

				<h4>Era</h4>
				<ul>
					<li><a href="#">Pre-War</a></li>
					<li><a href="#">40's-50's</a></li>
					<li><a href="#">60's-80's</a></li>
					<li><a href="#">90's-Present</a></li>
				</ul>
				<h4>Endings</h4>
				<ul>
					<li><a href="#">This week</a></li>
					<li><a href="#">Newly listed</a></li>
					<li><a href="#">Purchase Now</a></li>
				</ul>
			</div>
			<div id="right" class="col-lg-2">
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
				<img class="logo" src="img/logo.jpg" alt="logo">
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
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>