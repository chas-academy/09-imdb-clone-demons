@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-lg-2 mb-1">
                <img class="poster" src="https://image.tmdb.org/t/p/w370_and_h556_bestv2/{{$movie['poster_path']}}" alt="{{$movie['title']}}">
            </div>
        @endforeach
    </div>
@endsection
