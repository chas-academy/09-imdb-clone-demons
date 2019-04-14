<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'id', 'title', 'poster_path'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
