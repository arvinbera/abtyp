<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ABTYP | Admin Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
          <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/adminassets')}}/dist/img/logotest.png"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/adminassets')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('public/adminassets')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/adminassets')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background: #3A1C71;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFAF7B, #D76D77, #3A1C71);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFAF7B, #D76D77, #3A1C71); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">

  
<div class="login-box" style="box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Admin</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
       @if(Session::has('message'))
                      <div class="error" style="color:red;">{{ Session::get('message') }}</div>
                      @endif

      <form method="POST" action="{{ route('admin.login.submit') }}">
           @csrf
           <div class="form-group">
                        <label>User Role</label>
                        <select class="form-control" onchange="location = this.value;">
                          <option value="https://www.abtyp.org/admin/login">Admin</option>
                          <option value="{{url('/branch/login')}}">Coordinator</option>
                          <option value="https://www.abtyp.org/regional-coordinator-login">Regional coordinator</option>
                          <option value="{{url('/dashboard')}}">Parishad</option>
                          
                        </select>
                      </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
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
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-block btn-danger">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!--<div class="social-auth-links text-center mt-2 mb-3">
        <a href="{{url('/')}}" class="btn btn-block btn-primary">
          Goto Home Page
        </a>
        
      </div>-->

     
      <!-- /.social-auth-links -->

     
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('public/adminassets')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/adminassets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/adminassets')}}/dist/js/adminlte.min.js"></script>
</body>
</html>
