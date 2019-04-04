@extends('layouts.app')

@section('content')
    <h2>{{$movie['title']}}</h2>
    <img class="poster"
         src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/{{$movie['poster_path']}}"
         alt="{{$movie['title']}}">
    <h5>Overview</h5>
    <p>{{$movie['overview']}}</p>
    <h5>Runtime</h5>
    @php
        $hours = floor($movie['runtime'] / 60);
        $minutes = $movie['runtime'] % 60;
        echo "<p>{$hours}h {$minutes}m</p>"
    @endphp

    <h5>Genres</h5>
    <ul class="list-inline">
        @foreach($movie['genres'] as $genre)
            <li class="list-inline-item m-0 genre">
                <a class="badge badge-warning"
                   href="{{ route('genres.show', ['id' => $genre['id']]) }}">
                    {{$genre['name']}}
                </a>
            </li>
        @endforeach
    </ul>

    <h4>Recommendations</h4>
    <div class="scroller">
        @foreach($movie['recommendations']['results'] as $recommendation)
            <figure class="d-inline-block backdrop mr-2">
                <a href="{{ route('movies.show', ['id' => $recommendation['id']]) }}">
                    <img class="img-fluid rounded-lg"
                         src="https://image.tmdb.org/t/p/w500_and_h282_face/{{$recommendation['backdrop_path']}}"
                         alt="{{$recommendation['title']}}"
                         title="{{$recommendation['title']}}">
                </a>
                <figcaption class="text-truncate">{{$recommendation['title']}}</figcaption>
            </figure>
        @endforeach
    </div>
@endsection


