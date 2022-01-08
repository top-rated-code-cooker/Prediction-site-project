<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predictionbet extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'predictionType',
        'address',
        'position',
        'amount',
        'claimed',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
