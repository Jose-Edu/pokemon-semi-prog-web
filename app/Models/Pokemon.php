<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $fillable = [
        'name',
        'type',
        'power',
        'image',
        'trainer_id'
    ];

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }
}
