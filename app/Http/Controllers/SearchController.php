<?php

namespace App\Http\Controllers;

use Tmdb;

class SearchController extends Controller
{
    public function index()
    {
        $query = request()->validate(['q' => 'required']);
        $data = Tmdb::get('search/movie', ['query' => reset($query), 'page' => '1']);
        return view('movies', ['movies' => $data['results']]);
    }
}
