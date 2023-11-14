<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'is_paid',
        'payment_image',
        'order_note',
        'cashier_note',
    ];

    public function order() : HasOne
    {
        return $this->hasOne(User::class, 'order_id');
    }
    

}
