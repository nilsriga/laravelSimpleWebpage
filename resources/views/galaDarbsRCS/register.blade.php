@extends('masterRCS')

@section('title', 'Register')

@section('content')

@include('galaDarbsRCS/breadcrumbs')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<br>
<div class="container animated-container">
<div class="row">
    <div>
        <form class="col s12" id="reg-form">
            <div class="row">
            <div class="input-field col s6">
                <input id="first_name" type="text" class="validate" required>
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" class="validate" required>
                <label for="last_name">Last Name</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate" required>
                <label for="email">Email</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate" minlength="6" required>
                <label for="password">Password</label>
            </div>
            </div>
            <div class="input-field col s6">
                <button class="btn btn-large btn-register waves-effect waves-light red" type="submit" name="action">Register
                <i class="material-icons right">done</i>
                </button>
            </div>
            </div>
        </form>
    </div>
</div>

@endsection