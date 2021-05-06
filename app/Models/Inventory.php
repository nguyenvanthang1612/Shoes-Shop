<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = "inventory";

    public function product()
    {
        return $this->hasMany(product::class, 'inventory_id');
    }
}
