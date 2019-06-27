@extends('JS and CSS.jscss')
<!-- Album -->
<meta name="csrf-token" content="{{ csrf_token() }}">
    <div id="portfolio">

        <div class="">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-12">

                        <!-- Portfolio Items Filters -->
                        <div id="isotope-filters" class="text-center">


                            <button class="btn"  onclick="filter()"><span>New Released</span></button>
                            <!-- <button class="btn" data-filter=".mobile"><span>Mobile</span></button> -->
                            <button class="btn"  onclick="filter1()"><span>All Album</span></button>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Portfolio Items Wrapper -->
            <div id="portfolio-wrapper">

                <div class="container-fluid">

                    <div class="text-center">

                        <div id="isotope-container">

                            <div class="row desktop d-none new-relesed-1080" id="desktop">

                                <div class=" col-md-3  " >

                                    <div class="portfolio-item text-center" id="open">

                                        <a id="new1" href="/album/1" title="Add Description">
                                            <img src="{{ asset('image/album/al1.jpg') }}" class="img-responsive" alt="portfolio 01">
                                        </a>

                                    </div>


                                </div>
                                 <div class=" col-md-3  " >

                                    <div class="portfolio-item text-center">

                                        <a id="new2" href="/album/8" title="Add Description">
                                            <img src="{{ asset('image/album/al2.jpg') }}" class="img-responsive" alt="portfolio 01">
                                        </a>

                                    </div>


                                </div>
                                 <div class=" col-md-3  " >

                                    <div class="portfolio-item text-center">

                                        <a id="new3" href="/album/10" title="Add Description">
                                            <img src="{{ asset('image/album/al3.jpg') }}" class="img-responsive" alt="portfolio 01">
                                        </a>

                                    </div>


                                </div>
                                 <div class=" col-md-3  " >

                                    <div class="portfolio-item text-center">

                                        <a id="new4" href="/album/11" title="Add Description">
                                            <img src="{{ asset('image/album/al4.jpg') }}" class="img-responsive" alt="portfolio 01">

                                       </a>

                                    </div>


                                </div>
                                 
                                 <div class=" col-md-3  " >

                                    <div class="portfolio-item text-center">

                                        <a id="new6" href="/album/12" title="Add Description">
                                            <img src="{{ asset('image/album/al5.jpg') }}" class="img-responsive" alt="portfolio 01">
                                        </a>

                                    </div>


                                </div>

                            </div>
                            <!-- <div class="row web text-center wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s"> -->
                            <div class="row web artistlist-margin text-center" id="web">

                                <div class="col-md-12 list_colum" >
                                    <div class="list-group list-group-flush" id="albumPage" style="cursor: pointer;">
                                
                                        @if(count($albums)>0)
                                            @foreach ($albums as $album)
                                                <li id="album/{{$album->id}}" class="list-group-item list-group-item-action list_colum_item ">{{$album->title}}</li>
                                            @endforeach
                                        @endif

                                    </div>
                                </div>


                                {{-- <div class="col-md-6 list_colum" >
                                    <div class="list-group list-group-flush" id="albumPage" style="cursor: pointer;">

                                        @if(count($albums)>0)
                                            @foreach ($albums as $album)
                                                <li id="album/{{$album->id}}" class="list-group-item list-group-item-action list_colum_item ">{{$album->title}}</li>
                                            @endforeach
                                        @endif

                                    </div>
                                </div> --}}


                            </div>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- ALbum Ends -->
 <script type="text/javascript" charset="utf-8" async defer>

        function filter() {
           var element = document.getElementById("desktop");
          element.classList.remove("d-none");

          var element = document.getElementById("web");
          element.classList.add("d-none");

          

        }

        function filter1() {
            var element = document.getElementById("web");
          element.classList.remove("d-none");

          var element = document.getElementById("desktop");
          element.classList.add("d-none");

        }


 </script>
