@extends('app')

@section('content')
    <main class="container mt-6">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h4 class="mb-4 ml-1">Watchlists</h4>
                @if($watchlists->count())
                    <ul class="list-unstyled pl-2">
                        @foreach($watchlists as $watchlist)
                            <li>
                                <h5 class="heading">
                                    <a class="text-warning" href="{{ route('watchlist.show', ['id' => $watchlist['id']]) }}">{{$watchlist['title']}}</a>
                                </h5>
                                <h6 class="subheading">Created at {{$watchlist['created_at']->format('d M Y')}} -
                                    <a class="watchlist-delete text-danger" href="#">Delete</a>
                                </h6>
                                <form id="delete-form" action="{{ route('watchlist.destroy', ['id' => $watchlist['id']]) }}" method="POST" class="d-none">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="ml-1">You have no watchlists.</p>
                @endif
                <form action="{{ route('watchlist.store') }}" method="POST" class="col-sm-6">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Create list
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
