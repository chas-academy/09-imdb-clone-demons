<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieWatchlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_watchlist', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('movie_id');
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
            $table->unsignedBigInteger('watchlist_id');
            $table->foreign('watchlist_id')->references('id')->on('watchlists')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['movie_id', 'watchlist_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_watchlist');
    }
}
