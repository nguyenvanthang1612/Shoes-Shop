<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function order_items()
    {
        return $this->belongsTo(order_items::class);
    }


}
