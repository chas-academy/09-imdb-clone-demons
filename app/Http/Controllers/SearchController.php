<?php

namespace App\Http\Controllers;

use App\Services\TMDB;

class SearchController extends Controller
{
    public function index(TMDB $tmdb) {
        $query = request()->query('q');
        $data = $tmdb->get('search/movie', ['query' => $query, 'page' => '1']);
        return view('movies', ['movies' => $data['results']]);
    }
}
