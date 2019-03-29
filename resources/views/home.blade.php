@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-lg-2 mb-1">
                <a href="{{ route('movie', ['id' => $movie['id']]) }}">
                    <img class="poster"
                         src="{{$movie['poster_path'] ? "https://image.tmdb.org/t/p/w370_and_h556_bestv2/{$movie['poster_path']}" : asset('grey-placeholder.jpg')}}"
                         alt="{{$movie['title']}}">
                </a>
            </div>
        @endforeach
    </div>
@endsection
