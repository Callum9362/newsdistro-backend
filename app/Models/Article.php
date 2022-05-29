<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function source()
    {
        return $this->hasMany(Source::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
