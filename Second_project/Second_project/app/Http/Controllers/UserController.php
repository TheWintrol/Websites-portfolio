<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Song;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validate user input
        $validated = $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|string|email|max:15|unique:users',
            'password' => 'required|string|min:5|confirmed',
        ]);

        // Create the user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
        
        // Log in the user
        Auth::login($user);
    }

    public function likeSong(Song $song)
    {   
        if(Auth::user()->songs->contains($song)){
            Auth::user()->songs()->detach($song);
        }else{
           Auth::user()->songs()->attach($song); 
        }
        

        return response()->json(['message' => 'Success!']);
    }
}