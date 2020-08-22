<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
     protected $fillable = [
     	'status','seat_id','showtimesession_id'
    ];
}
