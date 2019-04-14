<?php

namespace App\Http\Controllers;

use Tmdb;

class GenreController extends Controller
{
    public function show($id)
    {
        $data = Tmdb::get('discover/movie', ['with_genres' => $id, 'page' => '1']);
        $genres = Tmdb::get('genre/movie/list');

        $genre = '';
        foreach($genres['genres'] as $key) {
            if($key['id'] == $id) {
                $genre = $key['name'];
            }
        }
        return view('movies', ['movies' => $data['results'], 'genre' => $genre]);
    }
}
