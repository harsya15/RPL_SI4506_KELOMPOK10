<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\OrderController;


Route::get('/', [HomeController::class, 'index']);

Route::post('/insert', 'App\Http\Controllers\ReservasiController@insert');


Route::middleware(['auth'])->group(function(){
    // masukan routing disini
    Route::get('/Menu', [MenuController::class, 'index'])->name('Menu.index');
    Route::get('/Menu/create', [MenuController::class, 'create'])->name('Menu.create');
    Route::post('/Menu/store', [MenuController::class, 'store'])->name('Menu.store');
    Route::get('/Menu/edit/{id}', [MenuController::class, 'edit'])->name('Menu.edit');
    Route::post('/Menu/update/{id}', [MenuController::class, 'update'])->name('Menu.update');
    Route::delete('/Menu/delete/{id}', [MenuController::class, 'delete'])->name('Menu.delete');
  
    Route::get('/Karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
    Route::get('/Karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
    Route::post('/Karyawan/store', [KaryawanController::class, 'store'])->name('karyawan.store');
    Route::get('/Karyawan/edit/{id}', [KaryawanController::class, 'edit'])->name('karyawan.edit');
    Route::post('/Karyawan/update/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');
    Route::delete('/Karyawan/delete/{id}', [KaryawanController::class, 'delete'])->name('karyawan.delete');

    Route::get('/Cabang', [CabangController::class, 'index'])->name('cabang.index');
    Route::get('/Cabang/create', [CabangController::class, 'create'])->name('cabang.create');
    Route::get('/Cabang/edit/{id}', [CabangController::class, 'edit'])->name('cabang.edit');
    Route::post('/Cabang/store', [CabangController::class, 'store'])->name('cabang.store');
    Route::post('/Cabang/update/{id}', [CabangController::class, 'update'])->name('cabang.update');
    Route::delete('/Cabang/delete/{id}', [CabangController::class, 'delete'])->name('cabang.delete');

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

