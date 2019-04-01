@extends('layouts.app')

@section('content')
    @if(request()->is("search"))
        <h3>Search results for: {{request()->query('q')}}</h3>
    @endif
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2 mb-2">
                <a href="{{ route('movie.show', ['id' => $movie['id']]) }}">
                    <img class="img-fluid"
                         src="{{$movie['poster_path'] ? "https://image.tmdb.org/t/p/w370_and_h556_bestv2/{$movie['poster_path']}" : asset('img/grey-placeholder.jpg')}}"
                         alt="{{$movie['title']}}">
                </a>
            </div>
        @endforeach
    </div>
@endsection
