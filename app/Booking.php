<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
     protected $fillable = [
      'bdate','btime','bquantity','total_price','user_id'
    ];
}
