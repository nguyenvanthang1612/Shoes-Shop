<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    protected $table = 'user_address';

    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(Users::class);
    }
}
