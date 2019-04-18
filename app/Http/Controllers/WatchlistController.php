<?php

namespace App\Http\Controllers;

use App\Watchlist;

class WatchlistController extends Controller
{
    public function index()
    {
        $watchlists = auth()->user()->watchlists->sortByDesc('created_at');
        return view('watchlist.index', ['watchlists' => $watchlists]);
    }

    public function store()
    {
        $title = request()->validate(['title' => 'required']);
        Watchlist::create($title + ['user_id' => auth()->id()]);
        return redirect()->route('watchlist.index');
    }

    public function show($id)
    {
        $movies = Watchlist::find($id)->movies;
        return view('watchlist.show', ['movies' => $movies]);
    }

    public function destroy($id)
    {
        $watchlist = Watchlist::findOrFail($id);
        $watchlist->delete();
        return redirect()->route('watchlist.index');
    }
}
