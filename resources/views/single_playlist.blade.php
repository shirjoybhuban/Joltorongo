@extends('JS and CSS.jscss')


<div>
                @foreach($songs as $song)
                   <h3> {{$song->title}}</h3>
                @endforeach

</div>