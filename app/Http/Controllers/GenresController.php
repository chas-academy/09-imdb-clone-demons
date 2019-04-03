<?php

namespace App\Http\Controllers;

use TMDB;

class GenresController extends Controller
{
    public function show($id)
    {
        $data = TMDB::get('discover/movie', ['with_genres' => $id, 'page' => '1']);
        $genres = TMDB::get('genre/movie/list');

        $genre = '';
        foreach($genres['genres'] as $key) {
            if($key['id'] == $id) {
                $genre = $key['name'];
            }
        }
        return view('movies', ['movies' => $data['results'], 'genre' => $genre]);
    }
}
