<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'order_items';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function orderdetail()
    {
        return $this->hasMany(OrderDetail::class,'order_id');
    }
}
