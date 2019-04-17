@extends('app')

@section('content')
    <main class="container mt-6">
        @component('partials.movies', ['movies' => $movies])
        @endcomponent
    </main>
@endsection
