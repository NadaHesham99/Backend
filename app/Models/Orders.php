<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

      public function users()
    {
        return $this->belongsTo('App\Models\User');
    }

     public function products()
    {
        return $this->hasMany('App\Models\Products');
    }

   
}
