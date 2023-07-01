<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCalendar extends Model
{
    protected $table = 'event_calendar';
    protected $fillable = [
        'mosque_id',
        'title',
        'description',
        'date',
        'organiser',
    ];
}
