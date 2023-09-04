<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use Auth;

class FrontController extends Controller
{
    public function welcome()
    {
        $songs = Song::select('id', 'title', 'artist', 'image', 'file')->get();
        return view('welcome', compact('songs'));
    }

    public function savedSongs()
    {
        $songs = Auth::user()->songs;
        return view('saved-songs', compact('songs'));
    }

    public function search(Request $request)
    {
        $songs = Song::select('id', 'title', 'artist', 'image', 'file')->where('title', 'LIKE', '%'.$request->search.'%')
        ->orWhere('artist', 'LIKE', '%'.$request->search.'%')->get();
        return view('welcome', compact('songs'));
    }

    public function playlistInfo() 
    {
        $songs = Song::select('id', 'title', 'artist', 'image', 'file')->get();
        return view('playlist-info', compact('songs'));
    }
}
