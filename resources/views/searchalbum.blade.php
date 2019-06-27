

   <!--  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">    -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <script src="{{ asset('js/search.js') }}"></script>





   
    <div class="container-fluid" id="page">
        <!-- <h1 class="">Search albums, Albums and Artists</h1> -->
        <form method="GET" action="{{ url('searchalbum') }}" id="searchForm">
            <div class="searchContainer">
                <h4>Find Album</h4>
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
 
        @if(count($albums) > 0 && $check == True)
            @foreach($albums as $album)
            <tr class="tr">
                <td id="album/{{$album->title}} "  style=" border-style: hidden;">{{ $album->title }}</td>
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

  

