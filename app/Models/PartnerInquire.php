<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartnerInquire extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number',
        'company_name',
        'contact_name',
        'phone_number',
    ];
}
