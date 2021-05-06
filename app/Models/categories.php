<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Product;

class categories extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $guarded = [];

    public function product()
    {
        return $this->hasMany(product::class, 'category_id');
    }
}
