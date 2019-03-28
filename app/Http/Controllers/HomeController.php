<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends GuzzleController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*    public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = parent::get('movie/popular', 'page=1');
        return view('home', ['movies' => $data['results']]);
    }
}
