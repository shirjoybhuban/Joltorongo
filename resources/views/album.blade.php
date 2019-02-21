@extends('JS and CSS.jscss')
<!-- Album -->
    <div id="portfolio">

        <div class="">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-12">

                        <!-- Portfolio Items Filters -->
                        <div id="isotope-filters" class="text-center">

                            
                            <button class="btn" data-filter=".desktop"><span>New Rleased</span></button>
                            <!-- <button class="btn" data-filter=".mobile"><span>Mobile</span></button> -->
                            <button class="btn" data-filter=".web"><span>All Album</span></button>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Portfolio Items Wrapper -->
            <div id="portfolio-wrapper">

                <div class="container-fluid">

                    <div class="text-center">

                        <div id="isotope-container">
                            
                            <div class="row desktop d-none new-relesed-1080">

                                <div class=" col-md-3  " >

                                    <div class="portfolio-item text-center">

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

                                    <div class="portfolio-item text-center">

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

                                    <div class="portfolio-item text-center">

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

                                    <div class="portfolio-item text-center">

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

                                    <div class="portfolio-item text-center">

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

                                    <div class="portfolio-item text-center">

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
                            <div class="row web artistlist-margin text-center" >
                        
                                <div class="col-md-3 list_colum" >
                                    <div class="list-group list-group-flush" id="artistPage">
                
                                        @if(count($albums)>0)
                                            @foreach ($albums as $album)
                                                <a href="album/{{$album->id}}" class="list-group-item list-group-item-action list_colum_item">{{$album->title}} </a>
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

    </div>
    <!-- ALbum Ends -->
