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
        return $this->belongsToMany(User::class, 'user_foods')->withTimestamps()->withPivot('count', 'order_id');
    }
    public function orders(){
        return $this->belongsToMany(Orders::class, 'user_foods', 'foods_id', 'order_id')->withPivot('count');
    }


}
