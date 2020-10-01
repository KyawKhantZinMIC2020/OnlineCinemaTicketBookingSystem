<?php

namespace App;
use App\ShowTime;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
     protected $fillable = [
      'movie_name','photo','rating','movie_type','hours','review',
    ];

    public function showtimes(){
    	return $this->hasMany(ShowTime::class,'show_id');
    }
    public function halls(){
    	return $this->belongsToMany('App\Hall', 'show_times', 'movie_id', 'hall_id')
    				->withPivot('showtime', 'date');
    }
}
