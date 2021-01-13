<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

  

    public function categories()
    {
        return $this->belongsTo('App\Models\Categories' , 'category_id');
    }

    public function carts()
    {
        return $this->hasMany('App\Models\Cart');
    }
   
}
