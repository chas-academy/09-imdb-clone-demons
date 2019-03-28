<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class SearchController extends GuzzleController
{
    public function index() {
        $query = Input::get('q');
        $data = parent::get('search/movie', "query={$query}&page=1");
        return view('home', ['movies' => $data['results']]);
    }
}
