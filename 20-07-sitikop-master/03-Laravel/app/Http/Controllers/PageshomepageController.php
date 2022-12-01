<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PageshomepageController extends Controller
{
    public function home(){
        $film = DB::table('now_playing')->get();
        return view('home', ['now_playing' => $film]);
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
