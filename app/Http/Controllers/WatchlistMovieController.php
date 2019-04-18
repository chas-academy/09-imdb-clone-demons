<?php

namespace App\Http\Controllers;

use Tmdb;
use App\Movie;
use App\Watchlist;

class WatchlistMovieController extends Controller
{
    public function store($id)
    {
        $input = request()->validate(['movie_id' => 'required']);
        $movie_id = reset($input);
        $data = Tmdb::get("movie/{$movie_id}");
        $movie = Movie::firstOrCreate(['id' => $movie_id], ['id' => $movie_id, 'title' => $data['title'], 'poster_path' => $data['poster_path']]);
        $movie->save();

        $watchlist = Watchlist::findOrFail($id);
        //dd($watchlist->movies);
        if(!$watchlist->movies()->find($movie_id)) {
            $watchlist->movies()->attach($movie_id);
        } else {
            $watchlist->movies()->detach($movie_id);
        }
        return redirect()->route('movie.show', $movie_id);
    }
}
