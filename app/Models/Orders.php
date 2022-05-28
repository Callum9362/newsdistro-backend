<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Products::class);
    }

    public function articles()
    {
        return $this->hasOne(Articles::class);
    }
}
