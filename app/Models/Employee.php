<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'job', 'phone', 'address', 'image', 'user_id'];

    public function added()
    {
        return $this->belongsTo('\App\Models\User', 'user_id');
    }
}
