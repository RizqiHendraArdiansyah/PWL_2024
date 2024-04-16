<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugin/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ asset(' adminlte/index2.html') }}"><b>Login Sistem</b></a>
  </div>
  
  <!-- /.login-logo -->
<div class="card">
  <div class="card-body login-card-body">
    <p class="login-box-msg">Silahkan Login Terlebih Dahulu</p>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif

    <form action="{{ route('autentifikasi') }}" method="POST">
      @csrf
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Username" name='username'>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>

      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      

        <!-- PERGI KE HALAMAN WELCOME.BLADE.PHP ATAU DASHBOARD -->
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button> 
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- PERGI KE HALAMAN REGISTER.BLADE.PHP ATAU MEMBUAT AKUN BARU -->
    <p class="mb-0">
      <a href="{{route('signup')}}" class="text-center">Registrasi Pengguna Baru</a>
    </p>
  </div>
  <!-- /.login-card-body -->
</div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>