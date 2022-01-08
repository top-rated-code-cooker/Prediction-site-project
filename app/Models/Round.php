<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    use HasFactory;

    protected $fillable = [
        'predictionType',
        'epoch',
        'bullAmount',
        'bearAmount',
        'rewardBaseCalAmount',
        'rewardAmount',
        'lockPrice',
        'closePrice',
        'startTimestamp',
        'lockTimestamp',
        'closeTimestamp',
        'lockPriceTimestamp',
        'closePriceTimestamp',
        'closed',
        'cancelled',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
