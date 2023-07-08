@extends('layouts.master')

@section('content')
  <div class="form-holder">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
          @include('partials.message')
          <div class="form-box">
            <strong class="form-title">Sign up</strong>
            <form action="{{ route('register') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="name" class="form-control" placeholder="Your name" name="name" required>
                @error('name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" type="email" class="form-control" placeholder="Enter your email" name="email" required>
                @error('email')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="tel">Phone number</label>
                <input id="tel" type="tel" class="form-control" placeholder="+60 161234567" name="phone" required>
                @error('phone')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="passowrd">Password</label>
                <input id="password" type="password" class="form-control" placeholder="Enter a password" name="password" required>
                @error('password')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="check" class="checkbox">
                  <input id="check" type="checkbox" name="notification">
                  I want to receive important notifications for TheTukang
                </label>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Sign up">
              </div>
              <div class="form-group">
                <p class="text-center">By signing up with us, you agree to our <a href="#">Terms os Use</a> and <a href="#">Privacy Policy</a></p>
              </div>
              <div class="form-footer text-center">
                <p class="m-0">Already have an account? <a href="{{ route('login') }}">Login</a></p>
                <p>Sign up as <a href="#">Service Provider</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

{{-- <form action="{{ route('register') }}" method="post">
  @csrf
  <div class="form-group">
    <input class="form-control" type="text" placeholder="Name" name="name">
    @error('name')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <input class="form-control" type="text" placeholder="Email" name="email">
    @error('email')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <input class="form-control" type="password" placeholder="Password" name="password">
    @error('password')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <input class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation">
    @error('password_confirmation')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group mb-0">
    <button class="btn btn-primary btn-block" type="submit">Register</button>
  </div>
</form>
<!-- /Form -->


<div class="text-center dont-have">Already have an account? <a href="{{ route('login') }}">Login</a></div> --}}
