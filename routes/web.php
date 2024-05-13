<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage.index');
});

Route::get('/Cabang', [CabangController::class, 'index'])->name('cabang.index');
Route::get('/Cabang/create', [CabangController::class, 'create'])->name('cabang.create');
Route::get('/Cabang/edit/{id}', [CabangController::class, 'edit'])->name('cabang.edit');
Route::post('/Cabang/store', [CabangController::class, 'store'])->name('cabang.store');
Route::post('/Cabang/update/{id}', [CabangController::class, 'update'])->name('cabang.update');
Route::delete('/Cabang/delete/{id}', [CabangController::class, 'delete'])->name('cabang.delete');