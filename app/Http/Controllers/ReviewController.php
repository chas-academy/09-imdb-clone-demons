<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Review;
use Tmdb;

class ReviewController extends Controller
{
    public function store($id)
    {
        $data = Tmdb::get("movie/{$id}");
        $movie = Movie::firstOrCreate(['id' => $id], ['id' => $id, 'title' => $data['title'], 'poster_path' => $data['poster_path']]);
        $movie->save();

        Review::create(request()->all() + ['movie_id' => $id, 'user_id' => auth()->id()]);
        return redirect()->route('movies.show', $id);
    }

    public function destroy(Review $review)
    {
        //
    }
}
