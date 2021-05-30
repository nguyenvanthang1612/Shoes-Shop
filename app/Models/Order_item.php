<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'orders_item';

    public function order_item()
    {
        return $this->belongsTo(Order::class);
    }
}
