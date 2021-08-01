<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'blogs';

    public function users()
    {
        return $this->belongsTo(Users::class);
    }
}
