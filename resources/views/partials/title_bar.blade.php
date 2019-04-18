<section class="title-bar">
    <h3>{{$title}} <small>({{substr($release_date, 0, 4)}})</small></h3>
    <div class="subtext">
        <p>{{gmdate("G\h i\m", ($runtime * 60))}}</p>
        <span>|</span>
        @component('partials.genres', ['genres' => $genres])
        @endcomponent
        <span class="d-none d-md-block">|</span>
        <p class="d-none d-md-block">{{$release_date}}</p>
    </div>
    @component('partials.watchlist_dropdown', ['watchlists' => $watchlists, 'id' => $id])
    @endcomponent
</section>
