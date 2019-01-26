@extends('JS and CSS.jscss')
@section('home')	
<!DOCTYPE html>
<html>
<head>
	<title>Joltorongo Home</title>
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
           
            <li>
                <a href="#">
                    <i class="fas fa-user-tie"></i>
                   Hi, {{ Auth::user()->name }}
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-music"></i>
                    Browse
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-image"></i>
                    Album
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-users"></i>
                    Artist
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-headphones"></i>
                    My Playlist
                </a>
            </li>
            <li style="background: #212226;">
                <a href="#">
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



		<div class="middle section" style="margin-bottom: 90px;">
			
			@include('artist')
		
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
</div>  


    @include('playerF.player')

</body>
</html>
@endsection
