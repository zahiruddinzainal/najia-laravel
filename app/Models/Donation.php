<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'donation';
    protected $fillable = [
        'month',
        'amount_collected_charity_box',
        'amount_collected_bank_account',
    ];
}
