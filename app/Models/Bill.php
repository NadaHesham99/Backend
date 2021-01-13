<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
