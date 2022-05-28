<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    public function sources()
    {
        return $this->hasMany(Sources::class);
    }

    public function orders()
    {
        return $this->belongsTo(Orders::class);
    }
}
