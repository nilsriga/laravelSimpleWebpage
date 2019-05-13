@extends('masterRCS')

@section('title', 'Register')

@section('content')

@include('galaDarbsRCS/breadcrumbs')

<br>
<div class="container animated-container">
    <div class="card" style="padding:10px;">
        <div>
            <h5>Register</h5>
        </div>

        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
            @csrf
            <div class="row">

                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif

            </div>

            <div class="row">
      
                <label for="email">{{ __('E-Mail Address') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                        value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
      
                </div>
            </div>

            <div class="form-group row">

                <label for="password">{{ __('Password') }}</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}"
                        name="password" required>

                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif

                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group row">
                <div>
                    <button type="submit" class="btn">{{ __('Register') }}</button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection