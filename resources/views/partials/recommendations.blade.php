<section class="recommendations">
    <h4>More Like This</h4>
    <div class="scroller">
        @foreach($recommendations as $movie)
            <figure>
                <a href="{{ route('movies.show', ['id' => $movie['id']]) }}">
                    <img class="rounded-lg"
                         src="https://image.tmdb.org/t/p/w500_and_h282_face/{{$movie['backdrop_path']}}"
                         alt="{{$movie['title']}}"
                         title="{{$movie['title']}}">
                </a>
                <figcaption class="text-truncate">{{$movie['title']}}</figcaption>
            </figure>
        @endforeach
    </div>
</section>
