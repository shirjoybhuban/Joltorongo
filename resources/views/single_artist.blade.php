@extends('JS and CSS.jscss')
<div class="entityInfo borderBottom">

	<div class="leftSection">
		<img src="{{ asset('image/artist/a1.jpg') }}">
	</div>

	<div class="rightSection">
		<h2>Artist name</h2>
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
                            	<ul class="tracklist">
										<li class='tracklistRow tracklistRow_artist '>
											<div class='trackCount'>
												<img class='play' src="{{ asset('image/icons/play.png') }}">
												<span class='trackNumber'>1</span>
											</div>


											<div class='trackInfo'>
												<span class='trackName'>Ke tumi</span>
												
											</div>

											<div class='trackOptions'>
												<img class='optionsButton' src="{{ asset('image/icons/like.png') }}">
											</div>

											<div class='trackDuration' style="font-size:13;font-family: oswald;">
												<span class='duration'>8.45</span>
											</div>


										</li>
										<li class='tracklistRow tracklistRow_artist'>
											<div class='trackCount'>
												<img class='play' src="{{ asset('image/icons/play.png') }}">
												<span class='trackNumber'>1</span>
											</div>


											<div class='trackInfo'>
												<span class='trackName'>Ke tumi</span>
												
											</div>

											<div class='trackOptions'>
												<img class='optionsButton' src="{{ asset('image/icons/like.png') }}">
											</div>

											<div class='trackDuration' style="font-size:13;font-family: oswald;">
												<span class='duration'>8.45</span>
											</div>


										</li>
										<li class='tracklistRow tracklistRow_artist'>
											<div class='trackCount'>
												<img class='play' src="{{ asset('image/icons/play.png') }}">
												<span class='trackNumber'>1</span>
											</div>


											<div class='trackInfo'>
												<span class='trackName'>Ke tumi</span>
												
											</div>

											<div class='trackOptions'>
												<img class='optionsButton' src="{{ asset('image/icons/like.png') }}">
											</div>

											<div class='trackDuration' style="font-size:13;font-family: oswald;">
												<span class='duration'>8.45</span>
											</div>


										</li>
										<li class='tracklistRow tracklistRow_artist'>
											<div class='trackCount'>
												<img class='play' src="{{ asset('image/icons/play.png') }}">
												<span class='trackNumber'>1</span>
											</div>


											<div class='trackInfo'>
												<span class='trackName'>Ke tumi</span>
												
											</div>

											<div class='trackOptions'>
												<img class='optionsButton' src="{{ asset('image/icons/like.png') }}">
											</div>

											<div class='trackDuration' style="font-size:13;font-family: oswald;">
												<span class='duration'>8.45</span>
											</div>


										</li>
										<li class='tracklistRow tracklistRow_artist'>
											<div class='trackCount'>
												<img class='play' src="{{ asset('image/icons/play.png') }}">
												<span class='trackNumber'>1</span>
											</div>


											<div class='trackInfo'>
												<span class='trackName'>Ke tumi</span>
												
											</div>

											<div class='trackOptions'>
												<img class='optionsButton' src="{{ asset('image/icons/like.png') }}">
											</div>

											<div class='trackDuration' style="font-size:13;font-family: oswald;">
												<span class='duration'>8.45</span>
											</div>


										</li>
										<li class='tracklistRow tracklistRow_artist'>
											<div class='trackCount'>
												<img class='play' src="{{ asset('image/icons/play.png') }}">
												<span class='trackNumber'>1</span>
											</div>


											<div class='trackInfo'>
												<span class='trackName'>Ke tumi</span>
												
											</div>

											<div class='trackOptions'>
												<img class='optionsButton' src="{{ asset('image/icons/like.png') }}">
											</div>

											<div class='trackDuration' style="font-size:13;font-family: oswald;">
												<span class='duration'>8.45</span>
											</div>


										</li>
									</ul>                           	
									
							</div>
                             
                                
                        </div>
                            
                       

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- ALbum Ends -->
