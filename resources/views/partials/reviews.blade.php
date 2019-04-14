<section class="reviews">
    <h4>User Reviews</h4>
    @if($reviews)
        <ul class="list-unstyled pl-2">
            @foreach($reviews as $review)
                <li>
                    <h5 class="heading">
                        <span class="badge badge-warning rating">{{$review['rating']}}/10</span>
                        {{$review['heading']}}
                    </h5>
                    <h6 class="subheading">{{$review['created_at']->format('d M Y')}} | by {{$review->user->name}}</h6>
                    <p>{{$review['comment']}}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>This movie has no reviews.</p>
    @endif
    @component('partials.review_model', ['movie_id' => $movie_id])
    @endcomponent
</section>
