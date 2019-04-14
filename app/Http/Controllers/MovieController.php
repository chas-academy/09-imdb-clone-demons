<?php

namespace App\Http\Controllers;

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

        $video_id = '';
        foreach($data['videos']['results'] as $video) {
            if($video['type'] == 'Trailer') {
                $video_id = $video['key'];
                break;
            }
        }
        return view('movies.show', ['movie' => $data, 'video_id' => $video_id]);
    }
}
