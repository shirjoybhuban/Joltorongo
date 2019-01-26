<!-- Artist -->
    <div id="portfolio">

        <div class="">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-12">

                        <!-- Portfolio Items Filters -->
                        <div id="isotope-filters" class="text-center">

                            
                            <button class="btn" data-filter=".desktop"><span>New Artist</span></button>
                            <!-- <button class="btn" data-filter=".mobile"><span>Mobile</span></button> -->
                            <button class="btn" data-filter=".web"><span>Artist list</span></button>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Portfolio Items Wrapper -->
            <div id="portfolio-wrapper">

                <div class="container-fluid">

                    <div class="">

                        <div id="isotope-container">
                            
                            <div class="row desktop d-none new-relesed-1080">

                                <div class=" col-md-3  " >

                                    <div class="portfolio-item text-center">

                                        <a href="" title="Add Description">
                                            <img src="{{ asset('image/artist/a7.jpg') }}" class="img-responsive" alt="portfolio 01">

                                            <div class="portfolio-item-overlay">
                                                <div class="portfolio-item-details text-center">

                                                    
                                                    <h3>Artist name</h3>

                                                  
                                                   

                                                </div>

                                            </div>
                                        </a>

                                    </div>


                                </div>
                                 <div class=" col-md-3  " >

                                    <div class="portfolio-item text-center">

                                        <a href="" title="Add Description">
                                            <img src="{{ asset('image/artist/a6.jpg') }}" class="img-responsive" alt="portfolio 01">

                                            <div class="portfolio-item-overlay">
                                                <div class="portfolio-item-details text-center">

                                                    
                                                    <h3>Artist name</h3>

                                                  
                                                    

                                                </div>

                                            </div>
                                        </a>

                                    </div>


                                </div>
                                 <div class=" col-md-3  " >

                                    <div class="portfolio-item text-center">

                                        <a href="" title="Add Description">
                                            <img src="{{ asset('image/artist/a5.jpg') }}" class="img-responsive" alt="portfolio 01">

                                            <div class="portfolio-item-overlay">
                                                <div class="portfolio-item-details text-center">

                                                    
                                                    <h3>Artist name</h3>

                                                  
                                                   

                                                </div>

                                            </div>
                                        </a>

                                    </div>


                                </div>
                                 <div class=" col-md-3  " >

                                    <div class="portfolio-item text-center">

                                        <a href="" title="Add Description">
                                            <img src="{{ asset('image/artist/a4.jpg') }}" class="img-responsive" alt="portfolio 01">

                                            <div class="portfolio-item-overlay">
                                                <div class="portfolio-item-details text-center">

                                                    
                                                    <h3>Artist name</h3>

                                                  
                                                    

                                                </div>

                                            </div>
                                        </a>

                                    </div>


                                </div>
                                 <div class=" col-md-3  " >

                                    <div class="portfolio-item text-center">

                                        <a href="" title="Add Description">
                                            <img src="{{ asset('image/artist/a3.jpg') }}" class="img-responsive" alt="portfolio 01">

                                            <div class="portfolio-item-overlay">
                                                <div class="portfolio-item-details text-center">

                                                    
                                                    <h3>Artist name</h3>

                                                  
                                                    

                                                </div>

                                            </div>
                                        </a>

                                    </div>


                                </div>
                                 <div class=" col-md-3  " >

                                    <div class="portfolio-item text-center">

                                        <a href="" title="Add Description">
                                            <img src="{{ asset('image/artist/a2.jpg') }}" class="img-responsive" alt="portfolio 01">

                                            <div class="portfolio-item-overlay">
                                                <div class="portfolio-item-details text-center">

                                                    
                                                    <h3>Artist name</h3>

                                                  
                                                    

                                                </div>

                                            </div>
                                        </a>

                                    </div>


                                </div>

                            </div>
                            <!-- <div class="row web text-center wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s"> -->
                            <div class="row web artistlist-margin text-center">
                               <div class="col-md-3 list_colum" >
                                <div class="list-group list-group-flush">
                                  
                                <?php
                                     // collet data from db in albhabetical order
                                // https://www.w3schools.com/sql/sql_orderby.asp
                                // Then diveded the array in 4 part 
                                // try to put item in every colum
                                     
                                     for( $i = 0; $i<19; $i++ ) {
                                        echo '<a href="" class="list-group-item list-group-item-action list_colum_item"> Artist name </a>';
                                     }
                        
                                  ?>
                                 </div>   
                               </div> 
                               <div class="col-md-3 list_colum" >
                                <div class="list-grou list-group-flush">
                                  
                                <?php
                                     // collet data from db in albhabetical order
                                // https://www.w3schools.com/sql/sql_orderby.asp
                                     
                                     for( $i = 0; $i<10; $i++ ) {
                                        echo '<a href="" class="list-group-item list-group-item-action list_colum_item"> Artist name </a>';
                                     }
                        
                                  ?>
                                 </div>   
                               </div> 
                               <div class="col-md-3 list_colum" >
                                <div class="list-group list-group-flush">
                                  
                                <?php
                                     // collet data from db in albhabetical order
                                // https://www.w3schools.com/sql/sql_orderby.asp
                                     
                                     for( $i = 0; $i<10; $i++ ) {
                                        echo '<a href="" class="list-group-item list-group-item-action list_colum_item"> Artist name </a>';
                                     }
                        
                                  ?>
                                 </div>   
                               </div> 
                               <div class="col-md-3 list_colum" >
                                <div class="list-group list-group-flush ">
                                  
                                <?php
                                     // collet data from db in albhabetical order
                                // https://www.w3schools.com/sql/sql_orderby.asp
                                     
                                     for( $i = 0; $i<10; $i++ ) {
                                        echo '<a href="" class="list-group-item list-group-item-action list_colum_item"> Artist name </a>';
                                     }
                        
                                  ?>
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
