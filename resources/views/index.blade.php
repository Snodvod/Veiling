@extends('master')

@section('content')
	
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

	<div class="row" id="popular">
		<div class="col-lg-6 col-lg-offset-3">
			<h2 id="pophead" class="text-center">Most popular this week </h2>
			<span id="expand" class="glyphicon glyphicon-expand"></span>
		</div>
	</div>
	<div class="row popimg">
		<div class="col-lg-offset-2 col-lg-2">
			<div class="row">
				<div class="col-lg-12">
					<a href="art/{{$popular[1]->id}}"><img src="img/{{$popular[1]->artwork->image}}" alt="{{$popular[1]->title}}"></a>
				</div>
				<div class="col-lg-12">
					<a href="art/{{$popular[2]->id}}"><img src="img/{{$popular[2]->artwork->image}}" alt="{{$popular[2]->title}}"></a>
				</div>
			</div>
			
			
		</div>
		<div class="col-lg-6">
			<a href="art/{{$popular[0]->id}}"><img src="img/{{$popular[0]->artwork->image}}" alt="{{$popular[0]->title}}"></a>
		</div>
	</div>

@endsection