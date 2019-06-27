@extends('JS and CSS.jscss')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="entityInfo">

	<div class="leftSection">
		<img src="{{ asset('image/playlist/playlist 1.jpg') }}" >
	</div>

	<div class="rightSection">
		<h2>{{$album->title}}</h2>
		<script type="text/javascript">
			var val = {!! json_encode($artist->toArray()) !!};
		</script>

		<p>{{$artist[0]->name}}</p>
		<p>9 songs</p>

	</div>

</div>

<div class="container-fluid">
	<ul class="tracklist" id="clicker" style="cursor: pointer;">
		@foreach ($songs as $song)
			<li class='tracklistRow' id={{$song->path}}>
					<div id="clicked" class='trackCount'>
						<img id= {{$song->path}} class='play' src="{{ asset('image/icons/play.png') }}">
						<span class='trackNumber'>{{$song->albumOrder}}</span>
					</div>
		
		
					<div class='trackInfo'>
						<span class='trackName'>{{$song->title}}</span>
						<span class='artistName'>{{$artist[0]->name}}</span>
					</div>
		
					<div class='trackOptions'>
						<img class='optionsButton' src="{{ asset('image/icons/like.png') }}">
					</div> -->
					<div class="trackOptions">
					@php
                        $a = "https://www.youtube.com/watch?v=";
						$b = $song->yvideo;
						$link = $a.$b
                    @endphp

						<a target="_blank" rel="noopener noreferrer" href="<?= $link ?>"  style="margin-top: 23;margin-right: 46;"  class='optionsButton'><span class="fab fa-youtube"></span></a>
						
					</div>
		
					<div class='trackDuration' style="font-size:13;font-family: oswald;">
						<span class='duration'>{{$song->duration}}</span>
					</div>

			</li>
		@endforeach
	</ul>
</div>
