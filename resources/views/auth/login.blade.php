@extends('layouts.login')
{{-- @section('page', 'Login Authentication')
@section('content') --}}
{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Login</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="assets/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            </div>
            <form action="{{route('login') }}" method="post">
              @csrf
              <div class="form-group first">
                <label for="username">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" autocomplete="off" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" disabled>
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <button type="submit" id="btn-login"class="btn btn-primary btn-block" disabled>{{ __('Login') }} &nbsp; <i class="nav-icon fas fa-sign-in-alt"></i></button>

              <!-- <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div> -->
            </form>
            <p class="mb-1">
              @if (Route::has('password.request'))
                <a class="text-center" href="{{ route('password.request') }}">
                  {{ __('Lupa Password?') }}
                </a>
              @endif
            </p>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
@endsection
@section('script')
  <script>
    $("#email").keyup(function(){
        var email = $("#email").val();

        if (email.length >= 5){
          $.ajax({
              type:"GET",
              data: {
                  email : email
              },
              dataType:"JSON",
              url:"{{ url('/login/cek_email/json') }}",
              success:function(data){
                if (data.success) {
                  $("#email").removeClass("is-invalid");
                  $("#email").addClass("is-valid");
                  $("#password").val('');
                  $("#password").removeAttr("disabled", "disabled");
                } else {
                  $("#email").removeClass("is-valid");
                  $("#email").addClass("is-invalid");
                  $("#password").val('');
                  $("#password").attr("disabled", "disabled");
                  $("#remember").attr("disabled", "disabled");
                  $("#btn-login").attr("disabled", "disabled");
                }
              },
              error:function(){
              }
          });
        } else {
          $("#email").removeClass("is-valid");
          $("#email").removeClass("is-invalid");
          $("#password").val('');
          $("#password").attr("disabled", "disabled");
          $("#remember").attr("disabled", "disabled");
          $("#btn-login").attr("disabled", "disabled");
        }
    });

    $("#password").keyup(function(){
        var email = $("#email").val();
        var password = $("#password").val();

        if (password.length >= 8){
          $.ajax({
              type:"GET",
              data: {
                  email : email,
                  password : password
              },
              dataType:"JSON",
              url:"{{ url('/login/cek_password/json') }}",
              success:function(data){
                if (data.success) {
                  $("#password").removeClass("is-invalid");
                  $("#password").addClass("is-valid");
                  $("#remember").removeAttr("disabled", "disabled");
                  $("#btn-login").removeAttr("disabled", "disabled");
                } else {
                  $("#password").removeClass("is-valid");
                  $("#password").addClass("is-invalid");
                  $("#remember").attr("disabled", "disabled");
                  $("#btn-login").attr("disabled", "disabled");
                }
              },
              error:function(){
              }
          });
        } else {
          $("#password").removeClass("is-valid");
          $("#password").removeClass("is-invalid");
          $("#remember").attr("disabled", "disabled");
          $("#btn-login").attr("disabled", "disabled");
        }
    });
  </script>
@endsection --}}
