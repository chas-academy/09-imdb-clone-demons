@extends('app')

@section('content')
    <main class="container mt-6">
        <div class="row">
            {{-- Trailer --}}
            <div class="embed-responsive embed-responsive-16by9 trailer">
                <iframe class="embed-responsive-item"
                        src="https://www.youtube.com/embed/{{$video_id}}"
                        allowfullscreen="allowfullscreen"></iframe>
            </div>
            {{-- Title bar --}}
            @component('partials.title_bar', ['title' => $movie['title'],
                                                'runtime' => $movie['runtime'],
                                                'genres' => $movie['genres'],
                                                'release_date' => $movie['release_date']])
            @endcomponent
            {{-- Poster --}}
            <div class="poster">
                <img src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/{{$movie['poster_path']}}"
                     alt="{{$movie['title']}}">
            </div>
            {{-- Overview --}}
            <p class="overview">{{$movie['overview']}}</p>
            {{-- Recommendations --}}
            @component('partials.recommendations', ['recommendations' => $movie['recommendations']['results']])
            @endcomponent
            {{-- Reviews --}}
            @component('partials.reviews', ['reviews' => $reviews, 'movie_id' => $movie['id']])
            @endcomponent
        </div>
    </main>
@endsection
