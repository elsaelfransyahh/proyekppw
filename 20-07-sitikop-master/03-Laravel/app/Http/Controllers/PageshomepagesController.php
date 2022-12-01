<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PageshomepagesController extends Controller
{
    public function home(){
        $film = \App\Models\now_playing::all();
        return view('homepage', ['film' => $film]);
    }

    public function moviedetail(){
        $film = DB::table('now_playing')->get();
        return view('moviedetails', ['now_playing' => $film]);
    }
}

class PagesafterloginController extends controller
{
    public function homeafterlogin(){
        $film = DB::table('now_playing')->get();
        return view('HomepageLogin', ['now_playing' => $film]);
    }
}
