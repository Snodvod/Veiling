{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('artwork_id', 'Artwork_id:') !!}
			{!! Form::text('artwork_id') !!}
		</li>
		<li>
			{!! Form::label('buy_now', 'Buy_now:') !!}
			{!! Form::text('buy_now') !!}
		</li>
		<li>
			{!! Form::label('price', 'Price:') !!}
			{!! Form::text('price') !!}
		</li>
		<li>
			{!! Form::label('buyer_id', 'Buyer_id:') !!}
			{!! Form::text('buyer_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}