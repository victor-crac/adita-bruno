<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'amount',
        'currency_id',
        'comment',
        'receive_notifications',
        'track_usage',
        'is_fully_paid'
    ];

}
