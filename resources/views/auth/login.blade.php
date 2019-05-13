@extends('masterRCS')

@section('title', 'Login')

@section('content')

@include('galaDarbsRCS/breadcrumbs')

<div class="container animated-container">
    <div class="card" style="padding:10px;">
        <div class="card-header">{{ __('Login') }}</div>

        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf

            <div class="row">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                        value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif

                </div>
            </div>

            <div class="row">
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

            <div class="row">
                <div>
                    <button type="submit" class="btn" style="margin-top:10px;">
                        {{ __('Login') }}
                    </button>

                    <a class="btn" style="margin-top:10px;" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </div>

        </form>
        
    </div>
</div>
@endsection
