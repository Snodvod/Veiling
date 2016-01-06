@extends('master')
@section('content')

<div class="row">
    <div class="col-lg-10 col-lg-offset-2">
        <h1>Register</h1>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="/auth/register">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-lg-5">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input tabindex="1" class="form-control" type="text" name="name" id="name" placeholder="Full name">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input tabindex="3" class="form-control" type="password" name="password" id="password" placeholder="********">
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select tabindex="5" id="country" name="country" class="form-control">
                            @foreach($countries as $country)
                                <option>{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input tabindex="8" class="form-control" type="text" name="address" id="address">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input tabindex="2" class="form-control" type="text" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Password confirmation</label>
                        <input tabindex="4"class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="********">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="zip">Zip Code</label>
                                <input tabindex="6" class="form-control" type="text" name="zip" id="zip" placeholder="XXXX">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input tabindex="7" class="form-control" type="text" name="city" id="city" placeholder="City">
                            </div>
                        </div>
                    </div>
                    <label for="number">Phone Number</label>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <select tabindex="9" id="code" name="code" class="form-control">
                                @foreach($countries as $country)
                                    <option>+ {{$country->calling_code}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-9">
                            <input tabindex="10" class="form-control" type="number" name="phone" id="phone" placeholder="X XX XX XX XX">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="checkbox">
                        <label>
                            <input name="terms" value="true" type="checkbox"> I agree with everything about everything!
                        </label>
                    </div>
                    <button class="btn btn-success btn-lg" type="submit">Register</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection