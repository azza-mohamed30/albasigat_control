<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['main_image', 'photos', 'user_id', 'title'];


    public function added()
    {
        return $this->belongsTo('\App\Models\User', 'user_id');
    }
}
