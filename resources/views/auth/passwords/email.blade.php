@extends('masterRCS')

@section('title', 'Email')

@section('content')

@include('galaDarbsRCS/breadcrumbs')

<div class="container">
    <div class="card" style="padding:10px;">
        <div>{{ __('Reset Password') }}</div>

        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
            @csrf

            <div class="row">
                <label for="email" >{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                        name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                    <span role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif

                </div>
            </div>

            <div class="row">
                <button type="submit" class="btn btn-primary">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>

        </form>
    </div>
</div>
    
@endsection
