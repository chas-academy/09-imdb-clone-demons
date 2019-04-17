<div class="row movies">
    @foreach($movies as $movie)
        <div class="movie">
            <a href="{{ route('movie.show', ['id' => $movie['id']]) }}">
                <img src="{{$movie['poster_path'] ? "https://image.tmdb.org/t/p/w370_and_h556_bestv2{$movie['poster_path']}" : asset('img/grey-placeholder.jpg')}}"
                     alt="{{$movie['title']}}"
                     title="{{$movie['title']}}">
            </a>
        </div>
    @endforeach
</div>
