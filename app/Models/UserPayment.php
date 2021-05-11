<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPayment extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'user_payments';

    public function users()
    {
        return $this->belongsTo(Users::class);
    }
}
