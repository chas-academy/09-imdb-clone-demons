<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'id', 'title', 'poster_path'
    ];

    public function watchlists()
    {
        return $this->belongsToMany(Watchlist::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
