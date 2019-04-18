
<!-- Button trigger modal -->
@auth
<button type="button" class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#exampleModal">
    Review this movie
</button>
@endauth

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Review this movie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('review.store', ['id' => $movie_id]) }}" id="form1">
                    @csrf
                    <div class="form-group">
                        <label for="rating">Rating (0-10)</label>
                        <input type="range" class="custom-range" min="0" max="10" value="1" id="rating" name="rating">
                    </div>
                    <div class="form-group">
                        <label for="heading">Heading</label>
                        <input type="text" class="form-control" id="heading" name="heading">
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment <span class="text-info">(optional)</span></label>
                        <textarea class="form-control" id="comment" name="comment"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="form1">Submit</button>
            </div>
        </div>
    </div>
</div>
