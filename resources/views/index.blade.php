

   <!--  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">    -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <script src="{{ asset('js/search.js') }}"></script>
    <script type="text/javascript">
        var sites = {!! json_encode($check) !!};
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
   
    <div class="container-fluid" id="page">
        <!-- <h1 class="">Search Songs, Albums and Artists</h1> -->
        <form method="GET" action="{{ url('index') }}" id="searchForm">
            <div class="searchContainer">
                <h4>Find your song</h4>
                <div class="row">
                    <div class="col-md-11">
                        <input type="text" id="search" name="search" class="searchInput" value="" placeholder="Start typing..." onfocus="">
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-info srcbtn"><span class="srcbtntext">Search</span></button>
                    </div>s
                </div>
                
            </div>
        </form>
   <br/>
   
   <div id="result">
    <table class="table " style="cursor: pointer;  ">
 
        @if(count($songs) > 0  && $check == True)
            @foreach($songs as $song)
            <tr class="tr">
                <td style=" border-style: hidden;">{{ $song->title }}</td>
                <td id="album/{{$song->album}}" style=" border-style: hidden;"><i class="fas fa-compact-disc" title="Album"></i></td>
                <td id="artist/{{$song->artist}}" style=" border-style: hidden;"><i class="fas fa-user" title="Artist"></i></td>
            </tr>
            @endforeach
        @elseif($check == False)
        <tr>
        </tr>
        @else
        <tr>
            <td colspan="3" class="text-danger">Result not found.</td>
        </tr>
        @endif
    </table>
   </div>
  
   </div>

  

