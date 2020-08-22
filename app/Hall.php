<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
     protected $fillable = [
      'hall name','address','quantity'
    ];
}
