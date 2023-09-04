<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File; 

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all();
        return view('admin.songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = "Song uploaded successfully";
        $validator = Validator::make($request->all(), [ 
            'title' => 'required|string',
            'artist' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg,webp',
            'file' => 'required|file|mimetypes:audio/mpeg,audio/wav,audio/mp3'
        ]);

        $messages = $validator->errors();
        if($messages->isEmpty()){
            $song = new Song();
            $song->title = $request->title;
            $song->artist = $request->artist;

            $imageName = time().'.'.$request->image->extension();  
            $request->image->move('songs/images/', $imageName);
            $song->image =  $imageName;

            $fileName = time().'.'.$request->file->extension();  
            $request->file->move('songs/files/', $fileName);
            $song->file =  $fileName;

            $song->save();
            return redirect()->back()->with('success', $message);
        }else {
            $message = "Data was incorrect please try again.";
            return redirect()->back()->with('error', $message); 
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view('admin.songs.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $message = "Song updated successfully";
        $validator = Validator::make($request->all(), [ 
            'title' => 'required|string',
            'artist' => 'required|string',
            'image' => 'mimes:jpeg,png,jpg,gif,svg,webp',
            'file' => 'file|mimetypes:audio/mpeg,audio/wav,audio/mp3'
        ]);

        $messages = $validator->errors();
        if($messages->isEmpty()){
            $song->title = $request->title;
            $song->artist = $request->artist;

            if($request->has('image')){
                File::delete(public_path('/songs/images/' . $song->image));
                $imageName = time().'.'.$request->image->extension();  
                $request->image->move('songs/images/', $imageName);
                $song->image = $imageName;
            }
            
            if($request->has('file')){
                File::delete(public_path('/songs/files/' . $song->file));
                $fileName = time().'.'.$request->file->extension();  
                $request->file->move('songs/files/', $fileName);
                $song->file =  $fileName;
            }
            $song->save();
            return redirect()->back()->with('success', $message);
        }else {
            $message = "Data was incorrect please try again.";
            return redirect()->back()->with('error', $message); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        $message = "Song deleted successfully";
        $messageType = "success";
        File::delete(public_path('/songs/images/' . $song->image));
        File::delete(public_path('/songs/files/' . $song->file));
        $song->delete();

        return redirect()->route('admin.song.index')->with($messageType, $message);  
    }
}
