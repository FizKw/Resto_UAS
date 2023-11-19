<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'status',
        'is_paid',
        'payment_image',
        'order_note',
        'cashier_note',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
