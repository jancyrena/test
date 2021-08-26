@extends('layouts.app')

@section('content')


<style>
    .text {
        width: 100%;
  text-transform: uppercase;
  font-size: 14px;
  padding: 15px;
  border: 0px;

    }
.login-form {
  background: #ffffff;
  padding: 30px 30px 20px;
  border-radius: 2px; }

.login-form h4 {
  color: #878787;
  text-align: center;
  margin-bottom: 50px; }

.login-form .checkbox {
  color: #878787; }

.login-form .checkbox label {
  text-transform: none; }

.login-form .btn {
  width: 100%;
  text-transform: uppercase;
  font-size: 14px;
  padding: 15px;
  border: 0px; }

.login-form label {
  color: #878787;
  text-transform: uppercase; }

.login-form label a {
  color: #ff2e44; }

  .card-header{
    color: #878787;
  text-align: center;
  margin-bottom: 50px;

  }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body" align="center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="login-form">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="login-form">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="login-form">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
