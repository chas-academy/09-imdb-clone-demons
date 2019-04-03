@extends('layouts.app')

@section('content')
    <h1>{{$movie['title']}}</h1>
    @foreach($movie['genres'] as $genre)
        <a href="{{ route('genres.show', ['id' => $genre['id']]) }}">
            <h4><span class="badge badge-warning">{{$genre['name']}}</span></h4>
        </a>
    @endforeach
    <h2></h2>
@endsection


