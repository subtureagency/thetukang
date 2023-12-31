<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>Doccure - Forgot Password</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/img/favicon.png') }}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css') }}">

  <!-- Main CSS -->
  <link rel="stylesheet" href="{{ url('assets/css/style2.css') }}">

  <!--[if lt IE 9]>
  <script src="{{ url('assets/js/html5shiv.min.js') }}"></script>
  <script src="{{ url('assets/js/respond.min.js') }}"></script>
  <![endif]-->
</head>
<body>

  <!-- Main Wrapper -->
  <div class="main-wrapper login-body">
    <div class="login-wrapper">
      <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="loginbox">
          <div class="login-left">
            <img class="img-fluid" src="{{ url('assets/img/logo-white.png') }}" alt="Logo">
          </div>
          <div class="login-right">
            <div class="login-right-wrap">
              <h1>Forgot Password?</h1>
              <p class="account-subtitle">Enter your email to get a password reset link</p>

              <!-- Form -->
              <form action="{{ route('password.email') }}" method="post">
                @csrf
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Email">
                  @error('email')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mb-0">
                  <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                </div>
              </form>
              <!-- /Form -->

              <div class="text-center dont-have">Remember your password? <a href="{{ route('login') }}">Login</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Main Wrapper -->

  <!-- jQuery -->
  <script src="{{ url('assets/js/jquery-3.2.1.min.js') }}"></script>

  <!-- Bootstrap Core JS -->
  <script src="{{ url('assets/js/popper.min.js') }}"></script>
  <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>

  <!-- Custom JS -->
  <script src="{{ url('assets/js/script.js') }}"></script>

</body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
</html>
