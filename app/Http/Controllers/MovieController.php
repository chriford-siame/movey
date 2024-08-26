<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Log;

class MovieController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function movie_list()
    {
        return view('movie_list');
    }

    public function movie_create()
    {
        return view('movie_create');
    }
    public function movie_upload(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,mov,ogg,qt|max:20000' // max size in kilobytes
        ]);
        // Store the video in the public/videos directory
        $path = $request->file('video')->store('videos', 'public');
        // Return success response or redirect
        return $path;
        return redirect(Route('movie_list'))->with('success', 'Video uploaded successfully. Path: ' . $path);
    }

    public function movie_detail()
    {
        return view('movie_detail');
    }
}
