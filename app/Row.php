<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Row extends Model
{
     protected $fillable = [
      'price','row'
    ];

    public function seats()
    {
    	return $this->hasMany('App\Seat');
    }
}
