<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlertUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'alert_id',
        'user_id',
        'lido'
    ];
}
