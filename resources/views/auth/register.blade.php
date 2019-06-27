 @extends('JS and CSS.jscss')
@section('auth.login')


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>
<body>
      <!-- Preloader Start -->
    <div class="row " id="preloader">
      <div id="status" class="col-sm-12">&nbsp;</div>
    </div>


    <!-- navbar start -->
    @include('header-footer.header')
    <!-- navbar end -->


<div class="container-fluid login_back" id="log_reg_back">
  <div class="wrap-login100 form_center row " id="form_ani">
    <div class="login100-form-title">
      <span class="login100-form-title-1" id="label_ani">
        Sign Up
      </span>
    </div>
    <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
      @csrf
      <div class="wrap-input100 m-b-26 form-group">
        <span class="label-input100">Name</span>
        <input placeholder="Enter Name" id="name" type="text" style="color: #ffe6e6;" class="input100 form-control{{ $errors->has('name') ? ' is-invalid' : '' }} " name="name" value="{{ old('name') }}" required autofocus>
        <span class="focus-input100"></span>
        @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
      </div>
      <div class="wrap-input100 validate-input m-b-26 form-group" data-validate="Email is required">
        <span class="label-input100">Email</span>
        <input placeholder="Enter Email" id="email" type="email" style="color: #ffe6e6;" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
        <span class="focus-input100"></span>
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
      </div>
      <div class="wrap-input100 validate-input m-b-18 form-group" data-validate = "Password is required">
        <span class="label-input100">Password</span>
        <input placeholder="Enter password" id="password" type="password" style="color: #ffe6e6;" class=" input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        <span class="focus-input100"></span>
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
      </div>
      <div class="wrap-input100 validate-input m-b-18 form-group" data-validate = "Password is required">
        <span class="label-input100">Re-type password</span>
        <input placeholder="password Confirmation" id="password-confirm" type="password" style="color: #ffe6e6;" class="form-control input100" name="password_confirmation" required>
        <span class="focus-input100"></span>
      </div>
      <div class="container-login100-form-btn">
        <button class="login100-form-btn" type="submit" id="log_reg_btn_ani">
        Submit
        </button>
      </div>
    </form>
    
  </div>
</div>
</body>
</html>
    


 

@endsection