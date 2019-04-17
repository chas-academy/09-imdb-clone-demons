<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'MovieController@index')->name('movie.index');
Route::get('/movie/{movie}', 'MovieController@show')->name('movie.show');

Route::get('/search', 'SearchController@index')->name('search.index');

Route::get('/genre/{genre}', 'GenreController@show')->name('genres.show');

Route::resource('watchlist', 'WatchlistController');

Route::post('/movie/{movie}/reviews', 'ReviewController@store')->name('review.store');

Auth::routes();


