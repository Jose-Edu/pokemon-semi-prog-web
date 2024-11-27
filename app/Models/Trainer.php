<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable = [
        'name',
        'image'
    ];

    public function pokemon()
    {
        return $this->hasMany(Pokemon::class);
    }
}
