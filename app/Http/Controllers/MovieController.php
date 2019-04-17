<?php

namespace App\Http\Controllers;

use Tmdb;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $query = request()->query('page');
        $data = Tmdb::get('movie/popular', ['page' => $query]);
        return view('movie.index', ['movies' => $data['results']]);
    }

    public function show($id)
    {
        $data = Tmdb::get("movie/{$id}", ['append_to_response' => 'recommendations,videos']);
        $movie = Movie::find($id);
        $reviews = $movie ? $movie->reviews->sortByDesc('created_at') : collect([]);

        $video_id = '';
        foreach($data['videos']['results'] as $video) {
            if($video['type'] == 'Trailer') {
                $video_id = $video['key'];
                break;
            }
        }
        return view('movie.show', ['movie' => $data, 'video_id' => $video_id, 'reviews' => $reviews]);
    }
}
