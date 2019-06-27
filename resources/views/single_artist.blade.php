<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript">
    var sites = {!! json_encode($songs->toArray()) !!};
</script>
{{-- <script type="text/javascript">
    var sites = {!! json_encode($check) !!};
	console.log("Logged Output: check", check)
</script> --}}
<script src="{{ asset('js/playlist.js') }}"></script>
    {{-- <script src="{{ asset('js/music-player/custom-playlist.js') }}"></script> --}}
@extends('JS and CSS.jscss')

<!DOCTYPE html>
<html>
<head>
    <title> {{$artist->name}} </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body style="background: #222429;">

<div class="wrapper" >
    <!-- Page Content  -->
    <div id="content">


     <div class="middle section" style="margin-bottom: 90px;" id="dynamic">

            <div class="entityInfo borderBottom">

                <div class="leftSection">
                    <img src="{{$artist->Path}}">
                </div>

                <div class="rightSection">
                    <h2>{{$artist->name}}</h2>
                    <!-- <button class="btn-general_artist btn-yellow_aritst">PLAY</button> -->


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


                                        <button class="btn" data-filter=".desktop" onclick="filter()"><span>Artist's Album</span></button>
                                       
                                        <button class="btn" data-filter=".web" onclick="filter1()" ><span>Artist's song</span></button>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Portfolio Items Wrapper -->
                        <div id="portfolio-wrapper">

                            <div class="container">



                                    <div id="isotope-container">

                                        <div class="row desktop d-none" id="desktop">
                                             
                                            <div class=" col-md-3  " >
                                                <div class="portfolio-item">
                                                    <a href="" title="Add Description">
                                                        <img src="{{ asset('image/album/a6.jpg') }}" class="img-responsive" alt="portfolio 01">
                                                        <div class="portfolio-item-overlay">
                                                    <div class="portfolio-item-details text-center">
                                                        <div class="album-info text-center">
                                                            <a id="/album/{{$album->id}}" href="">$album->title</a>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="row web text-center wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s"> -->
                                        <div class="web col-md-12" id="web">
                                                @if(count($songs)>0)
                                                <script type="text/javascript">
                                                    var sites = {!! json_encode($songs->toArray()) !!};
                                                </script>
                                                <ul class="tracklist" id='clicker' style="cursor: pointer;">
                                                    @php $count= 0; @endphp
                                                    @foreach ($songs as $song)
                                                       
                                                                <li class="tracklistRow tracklistRow_artist" >
                                                                    <div class="trackCount" id="play">
                                                                        <img id= {{$song->path}} class="play" src="{{ asset('image/icons/play.png') }}">
                                                                        <span class="trackNumber">{{$song->albumOrder}}</span>
                                                                    </div>


                                                                    <div class='trackInfo'>
                                                                        <span id="title" class='trackName'>{{$song->title}}</span>
                                                                        <script>    
                                                                            var value = {!! json_encode($song->title, JSON_HEX_TAG) !!};
                                                                        </script>

                                                                    </div>


                                                                    <div class='trackOptions'>
                                                                        @php
                                                                            $a = "https://www.youtube.com/watch?v=";
                                                                            $b = $song->yvideo;
                                                                            $link = $a.$b
                                                                        @endphp
                                                                        <a target="_blank" rel="noopener noreferrer" href="<?= $link ?>"  style="margin-top: 23px;margin-right: 46px;" class='optionsButton'><span class="fab fa-youtube"></span></a>
                                                                        
                                                                    </div>

                                                                    {{-- <div >
                                                                        <form id ="playlist" method="POST" action="/playlistl/{{$song->id}}"  >
                                                                        
                                                                            <input id="clicking" name="search" type="submit" value={{$artist->id}}>
    
                                                                        </form>
                                                                    </div> --}}

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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    var sites = {!! json_encode($songs->toArray()) !!};
</script>
{{-- <script src="{{ asset('js/music-player/custom-playlist.js') }}"></script> --}}
{{-- <script src="{{ asset('js/artist.js') }}"></script> --}}


 <script type="text/javascript" charset="utf-8" async defer>
     
        function filter() {
           var element = document.getElementById("desktop");
          element.classList.remove("d-none");

          var element = document.getElementById("web");
          element.classList.add("d-none");

          // console.log("bbn");

        }

        function filter1() {
            var element = document.getElementById("web");
          element.classList.remove("d-none");

          var element = document.getElementById("desktop");
          element.classList.add("d-none");

        }


 </script>


































