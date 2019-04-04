<?php

namespace App\Http\Controllers;

use TMDB;

class MoviesController extends Controller
{
    public function index()
    {
        $data = TMDB::get('movie/popular', ['page' => '1']);
        return view('movies', ['movies' => $data['results']]);
    }

    public function show($id)
    {
        $data = TMDB::get("movie/{$id}", ['append_to_response' => 'recommendations']);
        return view('movie', ['movie' => $data]);
    }
}
