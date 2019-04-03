<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'MoviesController@index')->name('movies.index');
Route::get('/movie/{movie}', 'MoviesController@show')->name('movies.show');
Route::get('/search', 'MoviesController@search')->name('movies.search');

Route::get('/genre/{genre}', 'GenresController@show')->name('genres.show');

Auth::routes();

/*Route::get('/user/{user_id}', 'UserController@user')
->name('user');

Route::get('/user/{user_id}/watchlists', 'UserController@watchlists')->name('watchlists');

Route::get('/user/{user_id}/watchlists/{watchlist_id}', 'UserController@watchlistMovies')
->name('watchlist');

Route::get('/user/{user_id}/settings', 'UserController@settings')
->name('settings');

Route::get('/admin/{user_id}', 'AdminController@adminDashboard')->name('admin');

Route::get('/admin/users', 'AdminController@users')->name('users');

Route::get('/admin/reviews', 'AdminController@reviews')->name('reviews');*/
