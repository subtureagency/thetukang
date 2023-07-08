@extends('layouts.master')
@section('content')
  <div class="form-holder">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
          @include('partials.message')

          <div class="form-box">
            <strong class="form-title">Login</strong>
            <form action="{{ route('login') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" type="email" name="email" class="form-control" placeholder="Enter your email">
                @error('email')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="passowrd">Password</label>
                <input id="password" name="password" type="password" class="form-control" placeholder="Enter a password">
                @error('password')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <input type="submit" class="btn btn-primary" value="Login">
            </form>
            <div class="text-center mt-5"><a href="{{ route('password.request') }}">Forgot Password?</a></div>
            <div class="text-center">Don’t have an account? <a href="{{ route('register') }}">Register</a></div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
{{-- <div class="main-wrapper login-body">
  <div class="login-wrapper">
    <div class="container">
      <div style="width: 72%;" class="mx-auto">
        @include('partials.message')
      </div>
      <div class="loginbox">
        <div class="login-left">
          <img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
        </div>
        <div class="login-right">
          <div class="login-right-wrap">
            <h1>Login</h1>
            <p class="account-subtitle">Access to our dashboard</p>

            <!-- Form -->
            <form action="{{ route('login') }}" method="post">
              @csrf
              <div class="form-group">
                <input class="form-control" name="email" type="text" placeholder="Email">
                @error('email')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <input class="form-control" name="password" type="password" placeholder="Password">
                @error('password')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Login</button>
              </div>
            </form>
            <!-- /Form -->

            <div class="text-center forgotpass"><a href="{{ route('password.request') }}">Forgot Password?</a></div>
            <div class="login-or">
              <span class="or-line"></span>
              <span class="span-or">or</span>
            </div>

            <!-- Social Login -->
            <div class="social-login">
              <span>Login with</span>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>
            </div>
            <!-- /Social Login -->

            <div class="text-center dont-have">Don’t have an account? <a href="{{ route('register') }}">Register</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
