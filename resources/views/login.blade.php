<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in Sultra Apps</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE') }}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-lightblue">
    <div class="card-header text-center">
      <a><img src="{{ asset('Img/logo_transisi.png') }}" height="150" width="190"></a>
    </div>
    <div class="card-body login-card-body">
      <p class="login-box-msg">Please Sign In</p>

      @if ($errors->has('email'))
        <div class="alert alert-danger">
          {{ $errors->first('email') }}
        </div>
      @endif

      @if ($errors->has('password'))
        <div class="alert alert-danger">
          {{ $errors->first('password') }}
        </div>
      @endif

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-3">
           <input 
              type="text" 
              class="form-control" 
              name="email_prefix" 
              id="email_prefix" 
              placeholder="Email" 
              value="{{ old('email_prefix') }}" 
              required
            >
          <div class="input-group-append">
            <span class="input-group-text" >@bpk.go.id</span> 
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <span class="input-group-text"></span>
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="show-password" onclick="togglePassword()">
              <label for="show-password">Show Password</label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" href class="btn btn-info btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <script>
      function togglePassword() {
        const passwordField = document.getElementById('password');
        if (passwordField.type === 'password') {
            passwordField.type = 'text'; // Tampilkan password
        } else {
            passwordField.type = 'password'; // Sembunyikan password
        }
      }
      </script>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('AdminLTE') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE') }}/dist/js/adminlte.min.js"></script>
</body>
</html>
