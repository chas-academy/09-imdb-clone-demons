<?php

namespace App\Http\Controllers;

use Tmdb;

class SearchController extends Controller
{
    public function index()
    {
        $query = request()->validate(['query' => 'required', 'page' => 'nullable']);
        $data = Tmdb::get('search/movie', $query);
        return view('movie.index', ['movies' => $data['results']]);
    }
}
