<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'deposit_time',
        'amount',
        'deposit_date',
        'billing_amount',
        'status',
    ];
}
