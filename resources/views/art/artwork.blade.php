 @extends('master')
 @section('content')
<div class="row">
	<div class="col-lg-offset-2 col-lg-8">
		<h1>{{$auction->title}}</h1>
		<p>{{$timediff}} ({{count($auction->bidders)}} bids)</p>
	</div>
</div>
<div class="row detail">
	@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
	<div class="col-lg-offset-2 col-lg-6 imagecol">
		<img src="/img/{{$auction->artwork->image}}" alt="artwork picture">
	</div>
	<div class="col-lg-2 side">
		<div id="title">
			<h2>{{$auction->title}}</h2>
			<p>{{$auction->artwork->year}}, {{$auction->artwork->artist->name}}</p>
		</div>
		<div id="time">
			<p>{{$timediff}}</p>
			<p>{{date("F jS, Y",strtotime($auction->end))}}</p>
		</div>
		<div class="bid">
			<p>Highest bid:</p>
			<h3>{{$auction->price}}</h3>
			<p><a href="buy">Buy now for € {{$auction->buy_now}}</a></p>
			<p>Bids: {{count($auction->bidders)}}</p>
			<div id="bluebid">
				<form method="POST" action="/bid">
					{{csrf_field()}}
					<input placeholder="€ {{$auction->price}}" id="bid" name="bid" type="text">
					<input type="hidden" value="{{$auction->id}}" name="id" id="id">
					<input type="hidden" value="{{$auction->price}}" id="prev" name="prev">
					<input type="submit" value="Bid now!"> 
				</form>
			</div>
		</div>
	</div>
</div>
<div class="row info">
	<div class="col-lg-offset-2 col-lg-6">
		<h3>Description</h3>
		<p>{{$auction->description}}</p>

		<h3>Condition</h3>
		<p>{{$auction->artwork->condition}}</p>
	</div>
	<div class="col-lg-2 side">
		<p><b>Artist</b></p>
		<p>{{$auction->artwork->artist->name}}</p>
		<p>{{$auction->artwork->artist->nationality}}</p>
		<p><b>Dimensions</b></p>
		<p>{{$auction->artwork->width}} x {{$auction->artwork->width}} 
			@if(isset($auction->artwork->width))
			 x {{$auction->artwork->width}}
			@endif
		</p>
		
		<div class="question">
			<a href="mail">Ask a question about this auction</a>
		</div>
	</div>
</div>
 @endsection