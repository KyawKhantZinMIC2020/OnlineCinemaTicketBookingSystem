<?php

namespace App;
use App\Movie;
use App\Hall;

use Illuminate\Database\Eloquent\Model;

class ShowTime extends Model
{
     protected $fillable = [
      'showtime','date','moive_id','hall_id'
    ];

    public function movie(){
    	return $this->belongsTo(Movie::class);
    }

    public function hall()
    {
    	return $this->belongsTo(Hall::class);
    }
}
