<?php

namespace App\Http\Controllers;

use Tmdb;

class GenreController extends Controller
{
    public function show($id)
    {
        $query = request()->query('page');
        $data = Tmdb::get('discover/movie', ['with_genres' => $id, 'page' => $query]);
        $genres = Tmdb::get('genre/movie/list');

        $genre = '';
        foreach($genres['genres'] as $key) {
            if($key['id'] == $id) {
                $genre = $key['name'];
            }
        }
        return view('movie.index', ['movies' => $data['results'], 'genre' => $genre]);
    }
}
