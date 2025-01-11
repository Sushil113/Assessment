<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
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

        return view('transaction_history', compact('breadcrumbs', 'title'));
    }

    //for generating report
    public function generateReport(Request $request)
    {
        $validatedData = $request->validate([
            'languages' => ['required', 'in:en,jp'], 
            'formats' => ['required', 'in:pdf'],    
        ]);

        $language = $validatedData['languages'];
        $format = $validatedData['formats'];

        app()->setLocale($language);

        $data = ['title' => __('messages.invoice_report')];

        $pdf = PDF::loadView('report.invoice_report', $data);

        $filename = __('messages.invoice_report') . '.' . $format;

        return $pdf->download($filename);
    }
}
