@extends('master')
@section('content')
<div class="auction-header row">
	<div class="col-lg-2 col-lg-offset-2">
		<h2>My auctions</h2>
	</div>
	<div class="col-lg-1 col-lg-offset-5">
		<div class="btn btn-default"><a href="/auctions/new">Add new auction</a><span class="glyphicon glyphicon-chevron-right"></span></div>
	</div>
</div>
<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
		<h3>Active</h3>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th></th>
					<th>Auction details</th>
					<th>Estimated price</th>
					<th>End date</th>
					<th>Remaining time</th>
				</tr>
			</thead>
			<tbody>
				@foreach($auctions as $auction)
					<tr>
						<td>IMAGE</td>
						<td>{{$auction->title}}
							{{$auction->artwork->year}},
							{{$auction->artwork->artist->name}}
						</td>
						<td>{{$auction->price}}</td>
						<td>{{date('F d, Y', strtotime($auction->end))}}</td>
						<td>TIME</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<h3>Expired</h3>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th></th>
						<th>Auction details</th>
						<th>Estimated price</th>
						<th>End date</th>
						<th>Remaining time</th>
					</tr>
				</thead>
				<tbody>
					<!-- for loop with user's auctions -->
				</tbody>
			</table>
		<h3>Sold</h3>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th></th>
						<th>Auction details</th>
						<th>Estimated price</th>
						<th>End date</th>
						<th>Remaining time</th>
					</tr>
				</thead>
				<tbody>
					<!-- for loop with user's auctions -->
				</tbody>
			</table>
	</div>
</div>
@endsection