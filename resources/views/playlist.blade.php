@extends('JS and CSS.jscss')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="playlistsContainer container-fluid">

	<div class="gridViewContainers row ">
	  <div class="container-fluid">
	  	<div class="row " >
			<h1>My Playlist</h1>
		</div>
		

		<div class="buttonItems row">
			<button class="btn-general_artist btn-yellow_aritst" data-toggle="modal" data-target="#myModal">NEW PLAYLIST</button>
            
		</div>
	  	
	  </div>

	</div>
	<div class="row new-relesed-1080">

                                <div class=" col-md-3" >

                                    <div class="portfolio-item text-center">

                                        <a  title="Add Description">
                                            <img src="{{ asset('image/playlist/playlist 2.jpg') }}" class="img-responsive" alt="portfolio 01">

                                           <div class="portfolio-item-overlay">
                                                <div class="portfolio-item-details text-center">
                                                    
                                                    <h3>My Playlist</h3>

                                                </div>

                                            </div>
                                        </a>

                                    </div>


                                </div>

                            </div>

                            </div>

</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body album-head">
          <h1 style="color: #f66f6f">  Only for premimum user.</h1>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
