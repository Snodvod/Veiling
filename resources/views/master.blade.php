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
				<img id="logo" src="img/logo.jpg">
			</div>
			@if(Auth::check())
			<div class="col-lg-2 uppernav">
				<a class="nav-elements" href="#">Watchlist</a>
				<a class="nav-elements" href="#">Profile</a>
				<a class="nav-elements" href="/auth/logout">Logout</a>
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
			<div class="col-lg-4 uppernav">
				<form id="loginform" action="/auth/login" method="POST">
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
		</div>
	<div class="row" id="header-strip">
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
	</div>
</body>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>