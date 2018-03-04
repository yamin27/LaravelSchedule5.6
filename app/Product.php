<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function users()
    {
        return $this->belongsTo(\App\User::class, 'user_id', 'id');
    }
}
