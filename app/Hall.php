<?php

namespace App;
use App\ShowTime;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
     protected $fillable = [
      'name','address','quantity','price',
    ];

    public function seats()
    {
    	return $this->hasMany('App\Seat');
    }

    public function movies(){
        return $this->belongsToMany('App\Movie','show_times', 'hall_id', 'movie_id')
               ->withPivot('showtime', 'date');
    }
}
