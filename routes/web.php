<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('landingPage');
});

Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::post('/order/submit', [OrderController::class, 'submitOrder'])->name('submitOrder');
Route::get('/order/success', [OrderController::class, 'showSuccessPage'])->name('orderSuccess');

// CLAIM
Route::get('/order/input-nomor-hp', [OrderController::class, 'inputNomorHp'])->name('order.inputNomorHp');
Route::post('/order/check-points', [OrderController::class, 'checkPoints'])->name('order.checkPoints');
Route::post('/order/select-items', [OrderController::class, 'selectItems'])->name('order.selectItems');
Route::post('/order/process-claim', [OrderController::class, 'processClaim'])->name('order.processClaim');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
