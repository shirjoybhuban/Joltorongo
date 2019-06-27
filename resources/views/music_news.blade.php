@extends('JS and CSS.jscss')
<!-- Artist -->
<meta name="csrf-token" content="{{ csrf_token() }}">
    <div id="portfolio">

        <div class="">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-12">

                        <!-- Portfolio Items Filters -->
                        <div id="isotope-filters" class="text-center">

                            
                            <button onclick="filter1()"  class="btn" ><span>Billbord</span></button>
                            <button onclick="filter2()"  class="btn" ><span>Rolling stone</span></button>
                            <button onclick="filter3()"  class="btn" ><span>NME</span></button>
                            <button onclick="filter4()"  class="btn" ><span>Pitchfork</span></button>
                            <!-- <button onclick="filternews()"  class="btn" id="bbc"><span>BBC</span></button>
                            <button onclick="filternews()"  class="btn" id="mn"><span>MN</span></button> -->
                            

                        </div>

                    </div>

                </div>

            </div>

            <!-- Portfolio Items Wrapper -->
            <div id="portfolio-wrapper">

                <div class="container-fluid">

                    <div class="">

                        <div id="isotope-container">
                            
                            <div id="billbord" class="row billbord d-none ">
                              
                               <iframe src="https://www.billboard.com/news"  scrolling="auto" >
                                <p>Your browser does not support this feture.</p>
                              </iframe>
                               

                            </div>
                            <!-- <div id="" class="row web text-center wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s"> -->
                            <div id="stone" class="row stone text-center">
                              <iframe src="https://www.rollingstone.com "  scrolling="auto">
                                <p>Your browser does not support this feture.</p>
                              </iframe>
                      
                             
                          
                                
                            </div>
                            <div id="nme" class="row nme text-center d-none">
                              <iframe src="https://www.nme.com/news/music"  scrolling="auto">
                                <p>Your browser does not support this feture.</p>
                              </iframe>
                      
                             
                          
                                
                            </div>
                            <div id="pitchfork" class="row pitchfork text-center d-none">
                              <iframe src="https://pitchfork.com/latest"  scrolling="auto">
                                <p>Your browser does not support this feture.</p>
                              </iframe>
                      
                             
                          
                                
                           <!--  </div>
                            <div class="row bbc text-center d-none">
                              <iframe src="https://www.bbc.co.uk/music/news"  scrolling="auto">
                                <p>Your browser does not support this feture.</p>
                              </iframe>
                      
                             
                          
                                
                            </div>
                            <div class="row mn text-center d-none">
                              <iframe src="http://www.music-news.com"  scrolling="auto">
                                <p>Your browser does not support this feture.</p>
                              </iframe> -->
                      
                             
                          
                                
                            </div>
                       
                            
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- artist Ends -->
     <script type="text/javascript" charset="utf-8" async defer>
     
        function filter1() {
           var element = document.getElementById("billbord");
          element.classList.remove("d-none");

          var element = document.getElementById("stone");
          element.classList.add("d-none");

          var element = document.getElementById("nme");
          element.classList.add("d-none");

          var element = document.getElementById("pitchfork");
          element.classList.add("d-none");
        }

        function filter2() {
             var element = document.getElementById("billbord");
          element.classList.add("d-none");

          var element = document.getElementById("stone");
          element.classList.remove("d-none");

          var element = document.getElementById("nme");
          element.classList.add("d-none");

          var element = document.getElementById("pitchfork");
          element.classList.add("d-none");

        }
        function filter3() {
           var element = document.getElementById("billbord");
          element.classList.add("d-none");

          var element = document.getElementById("stone");
          element.classList.add("d-none");

          var element = document.getElementById("nme");
          element.classList.remove("d-none");

          var element = document.getElementById("pitchfork");
          element.classList.add("d-none");

        }
        function filter4() {
            
            var element = document.getElementById("billbord");
          element.classList.add("d-none");

          var element = document.getElementById("stone");
          element.classList.add("d-none");

          var element = document.getElementById("nme");
          element.classList.add("d-none");

          var element = document.getElementById("pitchfork");
          element.classList.remove("d-none");

        }


 </script>
