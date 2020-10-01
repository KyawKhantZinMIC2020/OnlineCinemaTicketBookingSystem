<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable = [
      'seatno','hall_id','row_id'
    ];

    public function row()
    {
    	return $this->belongsTo('App\Row');
    }
    public function hall()
    {
    	return $this->belongsTo('App\Hall');
    }
}
