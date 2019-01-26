<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() 
    {
        if(Auth::guest())
        {
            return view('master');
        }
        else
        {
            return view('home');
        }
    }

    public function home()
    {
        return view('home');
    }

    public function ajax()
    {
        return view('ajax');
    }

}
