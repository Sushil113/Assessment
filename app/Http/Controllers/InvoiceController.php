<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function showPartnerInquire()
    {
        $breadcrumbs = [
            __('messages.invoice') => route('partner.inquire'),
            __('messages.partner _inquire') => '',
        ];

        $title = __('messages.invoice');

        return view('partner_inquire', compact('breadcrumbs', 'title'));
    }

    public function showTransactionHistory()
    {
        $breadcrumbs = [
            __('messages.invoice') => route('transaction.history'),
            __('messages.transaction_history') => '',
        ];

        $title = __('messages.invoice');

        return view('transaction_history', compact('breadcrumbs','title'));
    }
}
