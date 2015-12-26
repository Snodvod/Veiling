@extends('master')

@section('content')
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
		      <img src="img/art1.jpg" alt="Psychedelica">
		      <div class="carousel-caption">
		          <h3>Flash</h3>
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/art2.jpg" alt="Psychedelica dos">
		      <div class="carousel-caption">
		          <h3>Flash Flash</h3>
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/art3.png" alt="MC Escher">
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
	<div id="work" class="row">
		<div class="col-lg-12">
			<h2 class="text-center">How does it work?</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-2 col-lg-offset-3">
			<img class="center-block" src="img/signup.jpg" alt="Sign up">
			<h3 class="text-center">Sign up</h3>
		</div>
		<div class="col-lg-2">
			<img class="center-block" src="img/deals.jpg" alt="Deals">
			<h3 class="text-center">Make Deals</h3>
		</div>
		<div class="col-lg-2">
			<img class="center-block" src="img/happy.jpg" alt="Happy">
			<h3 class="text-center">Everybody happy</h3>
		</div>
	</div>
@endsection