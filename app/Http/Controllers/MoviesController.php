<?php

namespace App\Http\Controllers;

use Tmdb;

class MoviesController extends Controller
{
    public function index()
    {
        $data = Tmdb::get('movie/popular', ['page' => '1']);
        return view('movies', ['movies' => $data['results']]);
    }

    public function show($id)
    {
        $data = Tmdb::get("movie/{$id}", ['append_to_response' => 'recommendations']);
        return view('movie', ['movie' => $data]);
    }
}
