<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $fillable = [
        'events',
        'volunteers',
        'recipients',
        'projects',
        'user_id',

    ];

    public function added()
    {
        return $this->belongsTo('\App\Models\User', 'user_id');
    }
}
