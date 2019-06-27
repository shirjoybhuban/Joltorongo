@extends('JS and CSS.jscss')

<meta name="csrf-token" content="{{ csrf_token() }}">
<div>
                @foreach($songs as $song)
                   <h3> {{$song->title}}</h3>
                @endforeach

</div>