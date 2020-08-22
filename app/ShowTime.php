<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShowTime extends Model
{
     protected $fillable = [
      'showtime','date','moive_id'
    ];
}
