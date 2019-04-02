<?php

namespace App\Http\Controllers;

use TMDB;

class MovieController extends Controller
{
    public function index()
    {
        $data = TMDB::get('movie/popular', ['page' => '1']);
        return view('movies', ['movies' => $data['results']]);
    }

    public function show($id)
    {
        $data = TMDB::get("movie/{$id}");
        return view('movie', ['movie' => $data]);
    }

    public function search() {
        $query = request()->query('q');
        $data = TMDB::get('search/movie', ['query' => $query, 'page' => '1']);
        return view('movies', ['movies' => $data['results']]);
    }
}
