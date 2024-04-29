<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('landingPage');
});

Route::middleware(['auth'])->group(function(){
    // masukan routing disini

});

// Auth::routes(); 

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::post('/order/submit', [OrderController::class, 'submitOrder'])->name('submitOrder');
Route::get('/order/success', [OrderController::class, 'showSuccessPage'])->name('orderSuccess');