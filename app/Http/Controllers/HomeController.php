<?php

namespace App\Http\Controllers;

use App\Services\TMDB;

class HomeController extends Controller
{
    public function index(TMDB $tmdb)
    {
        $data = $tmdb->get('movie/popular', ['page' => '1']);
        return view('movies', ['movies' => $data['results']]);
    }
}
