<?php

namespace App\Http\Controllers;

use TMDB;

class SearchController extends Controller
{
    public function index()
    {
        $query = request()->validate(['q' => 'required']);
        $data = TMDB::get('search/movie', ['query' => reset($query), 'page' => '1']);
        return view('movies', ['movies' => $data['results']]);
    }
}
