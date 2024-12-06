<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image', 'user_id'];
    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/news_images/' . $this->image);

    }//end of get image path

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }

    public function added()
    {
        return $this->belongsTo('\App\Models\User', 'user_id');
    }
}
