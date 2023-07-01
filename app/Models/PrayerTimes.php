<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrayerTimes extends Model
{
    protected $fillable = [
        'state',
        'zone',
    ];
}
