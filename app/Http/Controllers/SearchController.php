<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Songs;

class SearchController extends Controller
{
    public function search(Request $request)
    {
            $check = false;
        
            if($request->has('search')){
                $songs = Songs::search($request->get('search'))->get();
                $check = true;	
            }else{
                $songs = Songs::get();	
            }
            return view('index', compact('songs','check'));
        
    }
}
