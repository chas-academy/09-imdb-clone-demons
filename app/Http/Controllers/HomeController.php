<?php

namespace App\Http\Controllers;

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
        $data = parent::get('popular', 'page=1');
        return view('home', ['movies' => $data['results']]);
    }
}
