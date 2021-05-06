<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categories()
    {
        return $this->belongsTo(categories::class);
    }
    public function Inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
    public function order_items()
    {
        return $this->hasMany(order_items::class, 'product_id');
    }
}
