<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
     protected $fillable = [
      'movie_name','moive_type','hours'
    ];
}
