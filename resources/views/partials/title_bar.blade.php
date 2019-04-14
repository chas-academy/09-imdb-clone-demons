<section class="title-bar">
    <h2>{{$title}}</h2>
    <div class="subtext">
        <p>{{gmdate("G\h i\m", ($runtime * 60))}}</p>
        <span>|</span>
        @component('partials.genres', ['genres' => $genres])
        @endcomponent
        <span class="d-none d-md-block">|</span>
        <p class="d-none d-md-block">{{$release_date}}</p>
    </div>
</section>
