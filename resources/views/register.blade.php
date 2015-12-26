@extends('master')

@section('content')
<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="form-group">
        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <input class="form-control" type="password" name="password">
    </div>

    <div class="form-group">
        <input class="form-control" type="password" name="password_confirmation">
    </div>

    <div>
        <button class="btn btn-submit" type="submit">Register</button>
    </div>
</form>
@endsection