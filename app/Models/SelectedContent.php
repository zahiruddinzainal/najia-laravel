<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectedContent extends Model
{
    protected $table = 'selected_content';
    protected $fillable = [
        'mosque_id',
        'hadis_verse',
        'quran_verse',
    ];
}
