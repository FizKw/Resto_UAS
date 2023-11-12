<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    use HasFactory;

    protected $fillable = [
        'food',
        'food_image',
        'price',
        'category',
        'description',
        'carouselId',
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'user_foods')->withTimestamps()->withPivot('count');
    }
    
}
