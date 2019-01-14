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
                        <li class="nav-item dropdown">
				            <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
				             Logout 
				            </a>
				            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
		<div class="middle section">
			
			@include('single_album_songlist')
		
		</div>		
       
    </div>
</div>

    


    @include('playerF.player')

</body>
</html>
@endsection
