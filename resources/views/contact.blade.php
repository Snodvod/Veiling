@extends('master')

@section('content')
	<div class="row">
		<div class="col-lg-offset-3 col-lg-6">
			<form action="/contact" method="POST">
				<div class="form-group">
					<label for="auction">Auction</label>
					<select id="auction" name="auction" class="form-control" value="{{ old('auction') }}">
						@if(isset($selected))
							@foreach($auctions as $auction)
								@if($auction->title == $selected->title)
									<option selected>{{ $auction->title }}</option>
								@else
								<option>{{ $auction->title }}</option>
								@endif
							@endforeach
						@else
							@foreach($auctions as $auction)
							<option> {{$auction->title}} </option>

							@endforeach
						@endif
					</select>
				</div>
				<div class="form-group">
					<label class="control-label" for="subject">Onderwerp</label>
					<input class="form-control" name="subject" id="subject" type="text">
				</div>
				<div class="form-group">
					<label class="control-label" for="message">Bericht</label>
					<textarea rows="10" id="message" name="message" class="form-control"></textarea>
				</div>
				<input type="hidden" id="user" name="user" value="{{$auction->auctionowner->id}}">
				<div class="form-group">
					<button type="submit" class="btn btn-success">Verzenden</button>
				</div>
			</form>
		</div>
	</div>
@endsection