@extends('master')
@section('content')
<div class="art">
	<div class="filter-wrapper">
		<div class="row sort">
			<div class=" col-lg-3 col-lg-offset-2">
				<b>SORT BY:</b>
				<a href="/art/sort/soon">ending soonest</a>
				<a href="/art/sort/late">ending latest</a>
				<a href="/art/sort/new">new auctions</a>
				<a href="/art/sort/pop">popular</a>
			</div>
			<div class="advanced col-lg-2 col-lg-offset-3">
				<h3>Advanced Options <span class="glyphicon glyphicon-collapse-down"></span></h3>
			</div>
		</div>
		<div class="row filter">
			<div class="col-lg-offset-2 col-lg-2">
				<b>Price</b>
				<ul>
					<li><a href="/art/filter/price/5000">Up to 5.000</a></li>
					<li><a href="/art/filter/price/10000">5.000-10.000</a></li>
					<li><a href="/art/filter/price/25000">10.000-25.000</a></li>
					<li><a href="/art/filter/price/50000">25.000-50.000</a></li>
					<li><a href="/art/filter/price/100.000">50.000-100.000</a></li>
					<li><a href="/art/filter/price/more">Above</a></li>
				</ul>
				<b>Ending</b>
				<ul>
					<li><a href="/art/filter/end/week">Ending this week</a></li>
					<li><a href="/art/filter/end/new">Newly listed</a></li>
					<li><a href="/art/filter/end/now">Purchase now</a></li>
				</ul>
			</div>
			<div class="col-lg-2">
				<b>Era</b>
				<ul>
					<li><a href="/art/filter/era/pre">Pre-War</a></li>
					<li><a href="/art/filter/era/4060">40's-60's</a></li>
					<li><a href="/art/filter/era/6080">60's-80's</a></li>
					<li><a href="/art/filter/era/now">80's-Present</a></li>
				</ul>
			</div>
		</div>	
	</div>
	<div class="row">
		<div id="portrait" class="col-lg-4 col-lg-offset-2">
			<p>Here. put that in your report!" and "i may have found a way out of here. when a naked man's chasing a woman through an alley with a butcher knife and a hard-on, i figure he's not out collecting for the red cross. ever notice how sometimes you come across somebody you shouldn't have f**ked with? well, i'm that guy...</p>
			<div class="overlay"></div>

		</div>
		<div class="col-lg-4">
			<div class="row">
				@foreach($auctions as $index => $auction)
					@if($index < 4 && isset($auction))
					<div class="col-lg-6">
						<div class="artwork">
							<div class="crop">
								<img src="/img/{{$auction->artwork->image}}">
							</div>
							<div class="details">
								<p>{{$auction->artwork->year}}, {{$auction->artwork->artist->name}}</p>
								<h4>{{$auction->title}}</h4>
								<p>€ {{$auction->price}}</p>
							</div>
							<div class="underline row">
									<div class="col-lg-6">{{$timediff[$index]}}</div>
									<div class="col-lg-6 btn btn-default"><a href="art/{{$auction->id}}">	Visit Auction ></a></div>
							</div>
						</div>
					</div>
					@endif
				@endforeach
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			@foreach($auctions as $index => $auction)
					@if($index >= 4 && isset($auction))
					<div class="col-lg-3">
						<div class="artwork">
							<div class="crop">
								<img src="/img/{{$auction->artwork->image}}">
							</div>
							<div class="details">
								<p>{{$auction->artwork->year}}, {{$auction->artwork->artist->name}}</p>
								<h4>{{$auction->title}}</h4>
								<p>€ {{$auction->price}}</p>
							</div>
							<div class="underline row">
									<div class="col-lg-6">{{$timediff[$index]}}</div>
									<div class="col-lg-6 btn btn-default"><a href="art/{{$auction->id}}">	Visit Auction ></a></div>
							</div>
						</div>
					</div>
					@endif
				@endforeach
		</div>
	</div>
</div>
@endsection