

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">   
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <script src="{{ asset('js/search.js') }}"></script>


   
    <div class="container" id="page">
        <h1>Search Songs, Albums and Artists</h1>
      <form method="GET" action="{{ url('index') }}" id="searchForm">
            <div class="row">
                <div class="col-md-6">
                    
                    <input type="text" id="search" name="search" class="form-control" placeholder="Search">
                </div>
                <div class="col-md-6">
                    <button class="btn btn-info">Search</button>
                </div>
            </div>
        </form>
   <br/>
 
   <div id="result">
    <table class="table table-bordered">
        <tr>
            <th>Song Title</th>
        </tr>
        @if(count($songs) > 0)
            @foreach($songs as $song)
            <tr>
                <td id="album/{{$song->album}}">{{ $song->title }}</td>
            </tr>
            @endforeach
        @else
        <tr>
            <td colspan="3" class="text-danger">Result not found.</td>
        </tr>
        @endif
    </table>
   </div>
  
   </div>

  

