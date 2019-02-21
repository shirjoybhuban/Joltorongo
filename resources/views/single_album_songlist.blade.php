@extends('JS and CSS.jscss')
<div class="entityInfo">

	<div class="leftSection">
		<img src="{{ asset('image/album/a1.jpg') }}">
	</div>

	<div class="rightSection">
		{{-- <h2>{{$album->title}}</h2> --}}
		<p></p>
		<p>9 songs</p>

	</div>

</div>

<div class="container-fluid">
	<ul class="tracklist">
		@foreach ($songs as $song)
			<li class='tracklistRow'>
					<div class='trackCount'>
						<img class='play' src="{{ asset('image/icons/play.png') }}">
						<span class='trackNumber'>{{$song->albumOrder}}</span>
					</div>
		
		
					<div class='trackInfo'>
						<span class='trackName'>{{$song->title}}</span>
						<span class='artistName'>Dhrubo Bhai</span>
					</div>
		
					<div class='trackOptions'>
						<img class='optionsButton' src="{{ asset('image/icons/like.png') }}">
					</div>
		
					<div class='trackDuration' style="font-size:13;font-family: oswald;">
						<span class='duration'>8.45</span>
					</div>

			</li>
		@endforeach
	</ul>
</div>
