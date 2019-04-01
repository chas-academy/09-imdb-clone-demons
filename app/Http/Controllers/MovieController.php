<?php

namespace App\Http\Controllers;

use App\Services\TMDB;

class MovieController extends Controller
{
    public function index(TMDB $tmdb)
    {
        $data = $tmdb->get('movie/popular', ['page' => '1']);
        return view('movies', ['movies' => $data['results']]);
    }

    public function show($id, TMDB $tmdb)
    {
        $data = $tmdb->get("movie/{$id}");
        return view('movie', ['movie' => $data]);
    }

    public function search(TMDB $tmdb) {
        $query = request()->query('q');
        $data = $tmdb->get('search/movie', ['query' => $query, 'page' => '1']);
        return view('movies', ['movies' => $data['results']]);
    }
}
