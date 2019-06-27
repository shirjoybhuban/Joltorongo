

   <!--  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">    -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <script src="{{ asset('js/search.js') }}"></script>





   
    <div class="container-fluid" id="page">
        <!-- <h1 class="">Search artists, Albums and Artists</h1> -->
        <form method="GET" action="{{ url('searchartist') }}" id="searchForm">
            <div class="searchContainer">
                <h4>Find Artist</h4>
                <div class="row">
                    <div class="col-md-11">
                        <input type="text" id="search" name="search" class="searchInput" value="" placeholder="Start typing..." onfocus="">
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-info srcbtn"><span class="srcbtntext">Search</span></button>
                    </div>
                </div>
                
            </div>
        </form>
   <br/>
 
   <div id="result">
    <table class="table " style="cursor: pointer;  ">
 
        @if(count($artists) > 0 && $check == True)
            @foreach($artists as $artist)
            <tr class="tr">
                <td id="artist/{{$artist->id}} "  style=" border-style: hidden;">{{ $artist->name }}</td>
                <!-- <td style=" border-style: hidden;"><i class="fas fa-compact-disc" title="Album"></i></td>
                <td style=" border-style: hidden;"><i class="fas fa-user" title="Artist"></i></td> -->
            </tr>
            @endforeach
        @elseif($check == False)
        
        @else
        <tr>
            <h4 colspan="3" class="text-danger">Result not found.</h4>
        </tr>
        @endif
    </table>
   </div>
  
   </div>

  

