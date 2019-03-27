<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('/movies', 'MoviesController@searchResult')->name('movies');

Route::get('/movie/{movie_id}', 'MovieController@movie')->name('movie');

Auth::routes();

Route::get('/user/{user_id}', 'UserController@user')
->name('user');

Route::get('/user/{user_id}/watchlists', 'UserController@watchlists')->name('watchlists');

Route::get('/user/{user_id}/watchlists/{watchlist_id}', 'UserController@watchlistMovies')
->name('watchlist');

Route::get('/user/{user_id}/settings', 'UserController@settings')
->name('settings');

Route::get('/admin/{user_id}', 'AdminController@adminDashboard')->name('admin');

Route::get('/admin/users', 'AdminController@users')->name('users');

Route::get('/admin/reviews', 'AdminController@reviews')->name('reviews');
