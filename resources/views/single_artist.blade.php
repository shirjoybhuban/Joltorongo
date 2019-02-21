<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/artist.js"></script>
<script type="text/javascript">
    var sites = {!! json_encode($songs->toArray()) !!};
    console.log(sites[0].path);
</script>
    <script src="{{ asset('js/music-player/custom-playlist.js') }}"></script>
@extends('JS and CSS.jscss')

<!DOCTYPE html>
<html>
<head>
    <title> {{$artist->name}} </title>


</head>
<body style="background: #222429;">

<div class="wrapper" >
    <!-- Sidebar  -->
    <nav id="sidebar" >
        <div class="sidebar-header">
            <h3>Joltorongo</h3>
            <strong>JT</strong>
        </div>

        <ul class="list-unstyled components">

            <li id="auth">
                <a>
                    <i class="fas fa-user-tie"></i>
                   Hi, {{ Auth::user()->name }}
                </a>
            </li>
            <li id="browse">
                <a>
                    <i class="fas fa-music"></i>
                    Browse
                </a>
            </li>
            <li id="album">
                <a>
                    <i class="fas fa-image"></i>
                    Album
                </a>
            </li>
            <li id="artist">
                <a>
                    <i class="fas fa-users"></i>
                    Artist
                </a>
            </li>
            <li id="playlist">
                <a>
                    <i class="fas fa-headphones"></i>
                    My Playlist
                </a>
            </li>
            <li style="background: #212226;", id="search">
                <a>
                    <i class="fas fa-search"></i>
                    Search
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
                          <a href="">World Music </a>
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

            <div class="entityInfo borderBottom">

                <div class="leftSection">
                    <img src="{{$artist->path}}">
                </div>

                <div class="rightSection">
                    <h2>{{$artist->name}}</h2>
                    <button class="btn-general_artist btn-yellow_aritst">PLAY</button>


                </div>

            </div>

            <!-- Album -->
                <div id="portfolio">

                    <div class="">

                        <div class="container-fluid">

                            <div class="row">

                                <div class="col-md-12">

                                    <!-- Portfolio Items Filters -->
                                    <div id="isotope-filters" class="text-center">


                                        <button class="btn" data-filter=".desktop"><span>Artist's Album</span></button>
                                        <!-- <button class="btn" data-filter=".mobile"><span>Mobile</span></button> -->
                                        <button class="btn" data-filter=".web"><span>Artist's song</span></button>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Portfolio Items Wrapper -->
                        <div id="portfolio-wrapper">

                            <div class="container">



                                    <div id="isotope-container">

                                        <div class="row desktop d-none">

                                            <div class=" col-md-3  " >

                                                <div class="portfolio-item">

                                                    <a href="" title="Add Description">
                                                        <img src="{{ asset('image/album/a6.jpg') }}" class="img-responsive" alt="portfolio 01">

                                                        <!-- <div class="portfolio-item-overlay">
                                                            <div class="portfolio-item-details text-center">


                                                                <h3>Logo</h3>


                                                                <span></span>


                                                                <p>Desktop, Design</p>

                                                            </div>

                                                        </div> -->
                                                    </a>

                                                </div>


                                            </div>
                                             <div class=" col-md-3  " >

                                                <div class="portfolio-item">

                                                    <a href="" title="Add Description">
                                                        <img src="{{ asset('image/album/a5.jpg') }}" class="img-responsive" alt="portfolio 01">

                                                        <!-- <div class="portfolio-item-overlay">
                                                            <div class="portfolio-item-details text-center">


                                                                <h3>Logo</h3>


                                                                <span></span>


                                                                <p>Desktop, Design</p>

                                                            </div>

                                                        </div> -->
                                                    </a>

                                                </div>


                                            </div>
                                             <div class=" col-md-3  " >

                                                <div class="portfolio-item">

                                                    <a href="" title="Add Description">
                                                        <img src="{{ asset('image/album/a4.jpg') }}" class="img-responsive" alt="portfolio 01">

                                                        <!-- <div class="portfolio-item-overlay">
                                                            <div class="portfolio-item-details text-center">


                                                                <h3>Logo</h3>


                                                                <span></span>


                                                                <p>Desktop, Design</p>

                                                            </div>

                                                        </div> -->
                                                    </a>

                                                </div>


                                            </div>
                                             <div class=" col-md-3  " >

                                                <div class="portfolio-item">

                                                    <a href="" title="Add Description">
                                                        <img src="{{ asset('image/album/a3.jpg') }}" class="img-responsive" alt="portfolio 01">

                                                        <!-- <div class="portfolio-item-overlay">
                                                            <div class="portfolio-item-details text-center">


                                                                <h3>Logo</h3>


                                                                <span></span>


                                                                <p>Desktop, Design</p>

                                                            </div>

                                                        </div> -->
                                                    </a>

                                                </div>


                                            </div>
                                             <div class=" col-md-3  " >

                                                <div class="portfolio-item">

                                                    <a href="" title="Add Description">
                                                        <img src="{{ asset('image/album/a2.jpg') }}" class="img-responsive" alt="portfolio 01">

                                                        <!-- <div class="portfolio-item-overlay">
                                                            <div class="portfolio-item-details text-center">


                                                                <h3>Logo</h3>


                                                                <span></span>


                                                                <p>Desktop, Design</p>

                                                            </div>

                                                        </div> -->
                                                    </a>

                                                </div>


                                            </div>
                                             <div class=" col-md-3  " >

                                                <div class="portfolio-item">

                                                    <a href="" title="Add Description">
                                                        <img src="{{ asset('image/album/a2.jpg') }}" class="img-responsive" alt="portfolio 01">

                                                        <!-- <div class="portfolio-item-overlay">
                                                            <div class="portfolio-item-details text-center">


                                                                <h3>Logo</h3>


                                                                <span></span>


                                                                <p>Desktop, Design</p>

                                                            </div>

                                                        </div> -->
                                                    </a>

                                                </div>


                                            </div>

                                        </div>
                                        <!-- <div class="row web text-center wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s"> -->
                                        <div class="web col-md-12">
                                                @if(count($songs)>0)
                                                <script type="text/javascript">
                                                    var sites = {!! json_encode($songs->toArray()) !!};
                                                    console.log(sites[0].path);
                                                </script>
                                                <ul class="tracklist" id='clicker'>
                                                    @php $count= 0; @endphp
                                                    @foreach ($songs as $song)
                                                       
                                                                <li class='tracklistRow tracklistRow_artist', id= {{$count}}>
                                                                    <div class='trackCount', id="play">
                                                                        <img class='play' src="{{ asset('image/icons/play.png') }}">
                                                                        <span class='trackNumber'>{{$song->albumOrder}}</span>
                                                                    </div>


                                                                    <div class='trackInfo'>
                                                                        <span class='trackName'>{{$song->title}}</span>
                                                                        <script>    
                                                                            var value = {!! json_encode($song->title, JSON_HEX_TAG) !!};
                                                                        </script>

                                                                    </div>

                                                                    <div class='trackOptions'>
                                                                        <button style="margin-top: 23;margin-right: 46;"  class='optionsButton' type=""><span class="fab fa-youtube"></span></button>
                                                                    </div>

                                                                    <div class='trackOptions'>
                                                                        <img class='optionsButton' src="{{ asset('image/icons/like.png') }}">
                                                                    </div>

                                                                    <div class='trackDuration' style="font-size:13;font-family: oswald;">
                                                                        <span class='duration'>{{$song->duration}}</span>
                                                                    </div>

                                                                </li>
                                                                @php $count+=1; @endphp
                                                            @endforeach
                                                             </ul>
                                                     
                                                 @endif

                                        </div>


                                    </div>



                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- ALbum Ends -->

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
</div >

<div id="playernew">
    @include('playerf.player')
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    var sites = {!! json_encode($songs->toArray()) !!};
    console.log(sites[0].path);
</script>
<script src="{{ asset('js/music-player/custom-playlist.js') }}"></script>
<script src="{{ asset('js/artist.js') }}"></script>





































