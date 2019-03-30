<?php

namespace App\Http\Controllers;

class HomeController extends GuzzleController
{
    public function index()
    {
        $data = parent::get('movie/popular', 'page=1');
        return view('home', ['movies' => $data['results']]);
    }
}
