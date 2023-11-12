<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'is_paid',
        'payment_image',
    ];

    public function order(){
        return $this->hasOne(User::class);
    }
    

}
