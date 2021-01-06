<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

     public function users()
    {
        return $this->hasOne('App\Models\User');
    }

     public function products()
    {
        return $this->hasMany('App\Models\Products');
    }
}
