<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//for changing language
Route::get('set-language/{lang}', function ($lang) {
    if (in_array($lang, ['en', 'jp'])) {
        session(['locale' => $lang]);
    }
    return back();
});

//Invoice routes
Route::get('/invoice/business-partner-inquire', [InvoiceController::class, 'showPartnerInquire'])->name('partner.inquire');
Route::get('/invoice/transaction-history', [InvoiceController::class, 'showTransactionHistory'])->name('transaction.history');
Route::post('/generate-report', [InvoiceController::class, 'generateReport'])->name('generate.report');