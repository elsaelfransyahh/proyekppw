<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\now_playing;

class NowPlaying extends Controller
{
    public function show(){
        $film = now_playing::all();
        return view('HomepageLoginPerbaikan', compact('film'));
    }
}