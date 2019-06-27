
<!-- navbar 1 start -->
<header>
  
</header>
<!-- navbar 1 end -->

<!-- navbar 2 start -->
@unless (Auth::check())

<div class="component">
  <!-- Start Nav Structure -->
  <button class="cn-button login-btn-font" id="cn-button" ><span class="">Login</span></button>
  <div class="cn-wrapper" id="cn-wrapper">
    <ul>
      <li><a href="/"><span style="" class="fas fa-compact-disc"></span></a></li>
      <li class="login-btn-font"><a href="{{ route('login') }}">Login</a></li>
      <li class="login-btn-font"><a href="{{ route('register') }}">SignUp</span></a></li>

      <li ><a href="/"><span class="fas fa-music"></span></a></li>
      
      <li><a href="/"><span class="fas fa-headphones"></span></a></li>
    </ul>
  </div>
  <div id="cn-overlay" class="cn-overlay"></div>
  <!-- End Nav Structure -->
</div>
<!-- navbar 2 end -->

@endunless