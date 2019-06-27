<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/ajax.js"></script>
<script type="text/javascript">
    var sites = {!! json_encode($songs->toArray()) !!};
</script>
    <script src="{{ asset('js/music-player/custom-playlist.js') }}"></script>

@extends('JS and CSS.jscss')
@section('home')
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joltorongo Home</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body style="background: #222429;">

<div class="wrapper" style="cursor: pointer" >
    <!-- Sidebar  -->
    <nav id="sidebar" >
        <div id="clicky" class="sidebar-header">
            <h3>Joltorongo</h3>
            <strong>JT</strong>
        </div>

        <ul class="list-unstyled components">

            
            <li id="auth" data-toggle="tooltip" data-placement="bottom" title="Double Click">
                <a  data-toggle="dropdown" style="outline: none;"s>
                    <i class="fas fa-user-tie"></i>
                     Hi, {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right bg-secondary" aria-labelledby="navbarDropdown">
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
           <!--  <li>
                <a id="browse" href="/browse" style="outline: none;">
                    <i class="fas fa-music"></i>
                    Browse
                </a>
            </li> -->
            <li>
                <a id="album" href="/album" style="outline: none;">
                    <i class="fas fa-image"></i>
                    Album
                </a>
            </li>
            <li >
                <a id="artist" href="/artist" style="outline: none;">
                    <i class="fas fa-users"></i>
                    Artist
                </a>
            </li>
            <li >
                <a id="playlist" href="/playlist"  style="outline: none;">
                    <i class="fas fa-headphones"></i>
                    My Playlist
                </a>
            </li>
            <li style="background: #212226;",>
                    <a id="searchsong" href="/searchsong" style="outline: none; font-size:16;">
                        <i class="fas fa-search"></i>
                        Search Song
                    </a>
                </li>
                <li style="background: #212226;",>
                    <a id="searchalbum" href="/searchalbum" style="outline: none; font-size:16;">
                        <i class="fas fa-search"></i>
                        Search Album
                    </a>
                </li>
                <li style="background: #212226;",>
                    <a id="searchartist" href="/searchartist" style="outline: none; font-size:16;">
                        <i class="fas fa-search"></i>
                        Search Artist
                    </a>
                </li>

        </ul>


    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light sticky-top">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-dark">
                    <i class="fas fa-align-left"></i>

                </button>

                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown nav-position">
                          <a id="music_news" href="/music_news">Music News</a>
                      </li>
                      <li class="nav-item dropdown nav-position">
                          <a href="" data-toggle="modal" data-target="#app">App</a>
                      </li>
                        <li class="nav-item dropdown nav-position" data-toggle="tooltip" data-placement="bottom" title="Double Click">
                            <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                             Logout
                            </a> -->
                            <a href=""  data-toggle="dropdown">logout</a>
                            <div class="dropdown-menu dropdown-menu-right bg-secondary" aria-labelledby="navbarDropdown">
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


                    </ul>
                </div>
            </div>
        </nav>



        <div class="middle section" style="margin-bottom: 90px;" id="dynamic">

<div class="overlay-trigger">
  <button style="display: none;"></button>
  <button  style="display: none;"></button>
  <button  style="display: none;"></button>
  <button  style="display: none;"></button>
  <button  style="display: none;"></button>
  <button  style="display: none;"></button>
  <button  style="display: none;"></button>
  <button  style="display: none;"></button>
  <button>new listener click here</button>

  
</div>

<button class="overlay-close"> <p style="color: #f66f6f;font-size: 1.1em;font-family: Oswald;">Hi guys, <br> First of all thanks for visiting us.We are very sorry to say that this site is still in beta phase.So you guys can encounter many bugs which will be very irritating.<br>We are developing some new feature.When we publish this site officially you will get this site on "www.joltorongo.com" <br> <i class="fas fa-window-close"></i></p></button>

<div class="overlay overlay01"></div>
<div class="overlay overlay02"></div>
<div class="overlay overlay03"></div>
<div class="overlay overlay04"></div>
<div class="overlay overlay05"></div>
<div class="overlay overlay06"></div>
<div class="overlay overlay07"></div>
<div class="overlay overlay08"></div>
<div class="overlay overlay09" style="color: white;">Bhuban </div>
<div class="overlay overlay10">
  <div></div>
  <div></div>
  <div></div>
</div>
            

        </div>

    </div>
</div>

  <!-- App Modal -->
<div class="modal fade" id="app" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="">
      <div class="modal-footer text-center">
        <button><i class="fas fa-times" data-dismiss="modal" style="font-size: 45;margin-right: 215;color: #f66f6f;margin-bottom: -15; cursor: pointer;"></i></button>
      </div>
      <div class="modal-body text-center">
        <img src="{{ asset('image/app/app.PnG') }}" class="img-responsive" alt="app-pic">
      </div>

    </div>
  </div>
</div class >

 @include('playerF.player')

</body>
</html>
@endsection
