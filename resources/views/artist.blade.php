

@extends('JS and CSS.jscss')

<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Artist -->
    <div id="portfolio">
        
        <div class="">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-12">

                        <!-- Portfolio Items Filters -->
                        <div id="isotope-filters" class="text-center">

                            
                            <button class="btn" id="artistPage1" data-filter=".desktop" onclick="filter()"><span>New Artist</span></button>
                            <button class="btn" data-filter=".web" onclick="filter1()"><span>Artist</span></button>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Portfolio Items Wrapper -->
            <div id="portfolio-wrapper">

                <div class="container-fluid">

                    <div class="">

                        <div id="isotope-container">
                            
                            <div class="row desktop d-none new-relesed-1080" id="desktop" >

                                <div class=" col-md-3  " >

                                    <div class="portfolio-item text-center">

                                        <a  title="Add Description">
                                            <img src="{{ asset('image/artist/ar1.jpg') }}" class="img-responsive" alt="portfolio 01">

                                            <div class="portfolio-item-overlay">
                                                <div class="portfolio-item-details text-center">

                                                    <div class="album-info text-center">
                                                        <a id="newar1" href="/artist/12">ARTCELL</a>
                                                    </div>
     
                                                </div>

                                            </div>
                                        </a>

                                    </div>


                                </div>
                                 <div class=" col-md-3  " >

                                    <div class="portfolio-item text-center">

                                        <a  title="Add Description">
                                            <img src="{{ asset('image/artist/ar2.jpg') }}" class="img-responsive" alt="portfolio 01">

                                            <div class="portfolio-item-overlay">
                                                <div class="portfolio-item-details text-center">

                                                 <div class="album-info text-center">
                                                        <a id="newar2" href="/artist/15">AURTHOHIN</a>
                                                </div>
                                                    

                                                </div>

                                            </div>
                                        </a>

                                    </div>


                                </div>
                                 <div class=" col-md-3  " >

                                    <div class="portfolio-item text-center">

                                        <a  title="Add Description">
                                            <img src="{{ asset('image/artist/ar3.jpg') }}" class="img-responsive" alt="portfolio 01">

                                            <div class="portfolio-item-overlay">
                                                <div class="portfolio-item-details text-center">

                                                  <div class="album-info text-center">
                                                        <a id="newar3" href="/artist/11">ARNOB</a>
                                                    </div>
                                                   

                                                </div>

                                            </div>
                                        </a>

                                    </div>


                                </div>
                                 <div class=" col-md-3  " >

                                    <div class="portfolio-item text-center">

                                        <a  title="Add Description">
                                            <img src="{{ asset('image/artist/ar4.jpg') }}" class="img-responsive" alt="portfolio 01">

                                            <div class="portfolio-item-overlay">
                                                <div class="portfolio-item-details text-center">

                                     
                                                  <div class="album-info text-center">
                                                        <a id="newar4" href="/artist/13">ASHES</a>
                                                    </div>
                                                    

                                                </div>

                                            </div>
                                        </a>

                                    </div>


                                </div>
                               
                                 

                            </div>
                            <!-- <div class="row web text-center wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s"> -->
                            <div class="row web artistlist-margin text-center" id="web">
                                
                               <div class="col-md-12 list_colum" >
                                <div class="list-group list-group-flush" id="artistPage" style="cursor: pointer;">
            
                                    @if(count($artists)>0)
                                        @foreach ($artists as $artist)
                                            <li id="artist/{{$artist->id}}" class="list-group-item list-group-item-action list_colum_item">{{$artist->name}} </li>
                                        @endforeach
                                    @endif

                                 </div>   
                               </div> 

                                
                            </div>
                            
                        </div>

                    </div>

                </div>

            </div>

        </div>
        
    </div>
   
    <!-- artist Ends -->
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