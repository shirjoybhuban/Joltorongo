<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Playlist;
use App\Songs;
use App\Artists;
use App\Album;

use Illuminate\Http\Request;

class PlaylistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $value)
    {
        $playlist = new Playlist;
        $id = Auth::user()->id;
        $playlist->user =$id;
        $playlist->song_id =$value;
        $playlist->save(); 

        if($request->has('search')){
            $id = $request->get('search');
            $check = true;
        }
    
        $artist = Artists::find($id);
        $album = Album::where('artist', $id)->get();
        $songs = Songs::where('artist', $id)->get();
    
        return view('single_artist')->with('artist', $artist)->with('album', $album)->with('songs',$songs)->with('check', $check);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
