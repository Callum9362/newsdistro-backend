<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function article()
    {
        return $this->hasOneThrough(Article::class, Order::class);
    }

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }
}
