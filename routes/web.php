<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'MovieController@index')->name('movies.index');
Route::get('/movie/{movie}', 'MovieController@show')->name('movies.show');

Route::get('/search', 'SearchController@index')->name('search.index');

Route::get('/genre/{genre}', 'GenreController@show')->name('genres.show');

Auth::routes();


