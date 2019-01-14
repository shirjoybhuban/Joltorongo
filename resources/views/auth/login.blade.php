 @extends('JS and CSS.jscss')
@section('auth.login')
    
    <!-- Preloader Start -->
    <div class="row " id="preloader">
      <div id="status" class="col-sm-12">&nbsp;</div>
    </div>


 <!-- navbar start -->
    @include('header-footer.header')
    <!-- navbar end -->


<div class="container-fluid login_back" id="log_reg_back">
  <div class="wrap-login100 form_center" id="form_ani">
    <div class="login100-form-title" >
      <span class="login100-form-title-1" id="label_ani">
        Log In
      </span>
    </div>
    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
      @csrf
      <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
        <span class="label-input100">Email</span>
        <input placeholder="Enter Email" id="email" type="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">
        <span class="focus-input100"></span>
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
      </div>
      <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
        <span class="label-input100">Password</span>
        <input placeholder="Enter password" id="password" type="password" class=" input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        <span class="focus-input100"></span>
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
      </div>
      <div class="flex-sb-m w-full p-b-30">
        <div class="contact100-form-checkbox">
          <input class="input-checkbox100"  type="checkbox" name="remember" id="ckb1" {{ old('remember') ? 'checked' : '' }}>
          <label class="label-checkbox100" for="ckb1">
            Remember me
          </label>
        </div>
        <div>
          <a href="{{ route('password.request') }}" class="txt1">
            Forgot Password?
          </a>
        </div>
      </div>
      <div class="container-login100-form-btn">
        <button class="login100-form-btn" type="submit" id="log_reg_btn_ani">
        Login
        </button>
      </div>
    </form>
    
  </div>
</div>
</div>
 

@endsection