<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function showPartnerInquire()
    {
        $breadcrumbs = [
            'Invoice' => route('partner.inquire'),
            'Business Partner Inquire' => '',
        ];

        $title = 'Invoice';

        return view('partner_inquire', compact('breadcrumbs', 'title'));
    }

    public function showTransactionHistory()
    {
        $breadcrumbs = [
            'Invoice' => route('transaction.history'),
            'Transaction History' => '',  
        ];

        $title = 'Invoice'; 

        return view('transaction_history', compact('breadcrumbs','title'));
    }
}
