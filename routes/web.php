<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Invoice routes
Route::get('/invoice/business-partner-inquire', [InvoiceController::class, 'showPartnerInquire'])->name('partner.inquire');
Route::get('/invoice/transaction-history', [InvoiceController::class, 'showTransactionHistory'])->name('transaction.history');


Route::get('set-language/{lang}', function ($lang) {
    if (in_array($lang, ['en', 'jp'])) {
        session(['locale' => $lang]);
    }
    return back();
});