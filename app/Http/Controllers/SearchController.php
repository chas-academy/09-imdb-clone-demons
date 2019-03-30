<?php

namespace App\Http\Controllers;

class SearchController extends GuzzleController
{
    public function index() {
        $query = request()->query('q');
        $data = parent::get('search/movie', "query={$query}&page=1");
        return view('home', ['movies' => $data['results']]);
    }
}
