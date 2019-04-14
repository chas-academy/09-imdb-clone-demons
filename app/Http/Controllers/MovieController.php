<?php

namespace App\Http\Controllers;

use App\Movie;
use Tmdb;

class MovieController extends Controller
{
    public function index()
    {
        $data = Tmdb::get('movie/popular', ['page' => '1']);
        return view('movies.index', ['movies' => $data['results']]);
    }

    public function show($id)
    {
        $data = Tmdb::get("movie/{$id}", ['append_to_response' => 'recommendations,videos']);
        $movie = Movie::find($id);
        $reviews = $movie ? $movie->reviews->sortByDesc('created_at') : [];

        $video_id = '';
        foreach($data['videos']['results'] as $video) {
            if($video['type'] == 'Trailer') {
                $video_id = $video['key'];
                break;
            }
        }
        return view('movies.show', ['movie' => $data, 'video_id' => $video_id, 'reviews' => $reviews]);
    }
}
