@extends('app')

@section('content')
    <main class="container mt-6">
        @if(request()->is("search"))
            <h3>Search results for: {{request()->query('q')}}</h3>
        @endif
        @if(request()->is("genre/*"))
            <h2>{{$genre}}</h2>
        @endif
        @component('partials.movies', ['movies' => $movies])
        @endcomponent
    </main>
@endsection
