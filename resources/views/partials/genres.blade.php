<ul class="list-inline genres">
    @foreach($genres as $genre)
        <li class="list-inline-item">
            <a class="badge badge-warning"
               href="{{ route('genres.show', ['id' => $genre['id']]) }}">
                {{$genre['name']}}
            </a>
        </li>
    @endforeach
</ul>
