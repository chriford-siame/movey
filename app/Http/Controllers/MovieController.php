<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function index() {
        return view('home');
    }

    public function movie_list() {
        return view('movie_list');
    }

    public function movie_create() {
        return view('movie_create');
    }

    public function movie_detail() {
        return view('movie_detail');
    }
    
}
