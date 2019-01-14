
<!-- navbar 1 start -->
<header>
  <nav class="navbar navbar-expand-lg fixed-top container">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fas fa-align-justify" style='font-size:25px;color:#f66f6f'></span>
    </button>
    <div class="site-nav-wrapper">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ">
          @guest <!-- if user not log in -->
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
<!--                         <li><a href="{{ route('login') }}"><span class="fab fa-facebook-square"></span></a></li>
      <li><a href="{{ route('register') }}"><span class="fab fa-google-plus-square"></span></a></li> -->
          @else <!-- if user loged in -->
          <li class="nav-item active">
            <a class="nav-link" href="#">Joltorngo <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
          @endguest
          <li class="nav-item dropdown">
          
        </ul>
      </div>
    </div>
    
  </nav>
</header>
<!-- navbar 1 end -->

<!-- navbar 2 start -->
@unless (Auth::check())

<div class="component">
  <!-- Start Nav Structure -->
  <button class="cn-button" id="cn-button" ><span class="login-btn-font">Login</span></button>
  <div class="cn-wrapper" id="cn-wrapper">
    <ul>
      <li><a href="#"><span style="" class="fab fa-facebook-messenger"></span></a></li>
      <li><a href="{{ route('login') }}"><span class="fab fa-facebook-square"></span></a></li>
      <li><a href="{{ route('register') }}"><span class="fab fa-google-plus-square"></span></a></li>

      <li ><a href="#"><span class="fab fa-github-square"></span></a></li>
      <li><a href="#"><span class="fas fa-stroopwafel"></span></a></li>
    </ul>
  </div>
  <div id="cn-overlay" class="cn-overlay"></div>
  <!-- End Nav Structure -->
</div>
<!-- navbar 2 end -->
@endunless