<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class MovieController extends GuzzleController
{
    public function index()
    {
        $id = Route::current()->parameter('id');
        $data = parent::get("{$id}");
        return view('movie', ['movie' => $data]);
    }
}
