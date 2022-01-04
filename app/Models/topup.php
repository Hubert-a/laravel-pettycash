<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topup extends Model
{
    protected $fillable = [
        'topup'
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
