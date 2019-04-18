<div class="dropdown mb-2 mb-md-3">
    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">+ Add to watchlist</button>
    <div class="dropdown-menu">
        @foreach($watchlists as $watchlist)
            <form action="{{ route('watchlist.movie.store', $watchlist['id']) }}" method="POST">
                @csrf
                <a href="#" class="dropdown-item watchlist-dropdown-item {{$watchlist->movies->contains('id', $id) ? 'dropdown-item-checked' : ''}}">{{$watchlist['title']}}</a>
                <input name="movie_id" type="hidden" value="{{$id}}">
            </form>
        @endforeach
    </div>
</div>
