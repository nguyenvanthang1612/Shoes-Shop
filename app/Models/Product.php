<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $attribute = [
        'img' => '[]'
    ];

    protected $casts = [
        'img' => 'array'
    ];

    protected $guarded = [];

    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }

    public function getThumbnailAttribute()
    {
        if (count($this->img) > 0) {
            return $this->img[0];
        }
        return "";
    }

}
