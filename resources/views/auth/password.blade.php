@extends('master')

@section('content')
<div class="row">
    <div class="col-lg-offset-2 col-lg-2">
        <form method="POST" action="/password/email">
    {!! csrf_field() !!}

    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <h2>Send a reset link</h2>
    <div class="form-group">
        Email
        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
    </div>
        <input class="btn btn-warning" type="submit" value="Send Password Reset Link">
    </div>
</form>
    </div>
</div>


@endsection