<?php

namespace App\Http\Controllers;

use Tmdb;
use App\Movie;
use App\Review;

class ReviewController extends Controller
{
    public function store($id)
    {
        $data = Tmdb::get("movie/{$id}");
        $movie = Movie::firstOrCreate(['id' => $id], ['id' => $id, 'title' => $data['title'], 'poster_path' => $data['poster_path']]);
        $movie->save();

        $input = request()->validate(['rating' => 'required', 'heading' => 'required', 'comment' => 'nullable']);
        Review::create($input + ['movie_id' => $id, 'user_id' => auth()->id()]);
        return redirect()->route('movie.show', $id);
    }

    public function destroy(Review $review)
    {
        //
    }
}
