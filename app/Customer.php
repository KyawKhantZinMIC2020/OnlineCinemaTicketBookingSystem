<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
   protected $fillable = [
   	'user_id','phone'
   ];

   public function user()
   {
   	return $this->belongTo(User::class);
   }
}

