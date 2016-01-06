@extends('master')

@section('content')
<div class="new-auction row">
	<div class="col-lg-5 col-lg-offset-2">
		<h2>Add a new auction</h2>
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		<form class="form" method='POST' action="/auctions/store" enctype="multipart/form-data">
			<div class="form-group">
				<select id="style" name="style" class="form-control">
					@foreach($styles as $style)
						<option>{{ $style->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="title">Auction title</label>
				<input type="text" class="form-control" name="title" id="title" placeholder="Auction Title (maximum 255 characters)">
			</div>
			<div class="form-group">
				<label for="artist">Artist</label>
				<input type="text" class="form-control" name="artist" id="artist" placeholder="Artist">
			</div>
			<div class="form-group">
				<label for="year">Year</label>
				<input type="number" class="form-control" name="year" id="year" placeholder="X X X X">
			</div>
			<div class="form-group">
				<label for="width">Width (mm)</label>
				<input type="number" class="form-control" name="width" id="width" placeholder="X X X X">
			</div>
			<div class="form-group">
				<label for="height">Height (mm)</label>
				<input type="number" class="form-control" name="height" id="height" placeholder="X X X X">
			</div>
			<div class="form-group">
				<label for="depth">Depth (optional)</label>
				<input type="number" class="form-control" name="depth" id="depth" placeholder="X X X X">
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<textarea class="form-control" id="description" name="description" placeholder="Describe your auction as thorough as possible (maximum 255 characters)" rows="3"></textarea>
			</div>
			<div class="form-group">
				<label for="condition">Condition</label>
				<textarea class="form-control" id="condition" name="condition" placeholder="What's the condition of the artwork? (maximum 255 characters)" rows="3"></textarea>
			</div>
			<div class="form-group">
				<label for="origin">Origin</label>
				<input type="text" class="form-control" name="origin" id="origin" placeholder="What's the origin of the artwork? (maximum 255 characters)">
			</div>
			<div class="form-group">
				<label for="picture">Picture</label>
				<input type="file" class="form-control" name="picture" id="picture">
			</div>
			<div class="form-group">
				<label for="minprice">Minimum price</label>
				<input type="number" class="form-control" name="minprice" id="minprice" placeholder="X X X X">
			</div>
			<div class="form-group">
				<label for="buyout">Buyout price</label>
				<input type="number" class="form-control" name="buyout" id="buyout" placeholder="X X X X">
			</div>
			<div class="form-group">
				<label for="date">End date</label>
				<input type="date" class="form-control" name="date" id="date" placeholder="DD/MM/YY">
			</div>
			<div class="checkbox">
				<label>
					<input name="terms" value="true" type="checkbox"> I agree with everything about everything!
				</label>
			</div>
			<button type="submit">Add Auction</button>
			<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
		</form>
	</div>
</div>

@endsection