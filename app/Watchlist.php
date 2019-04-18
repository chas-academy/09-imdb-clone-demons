<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    protected $fillable = [
        'user_id', 'title'
    ];

    public function movies()
    {
        return $this->belongsToMany(Movie::class)->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
