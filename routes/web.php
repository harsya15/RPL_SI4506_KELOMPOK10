<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KaryawanController;

Route::get('/', function () {
    return view('landingPage');
});

Route::post('/insert', 'App\Http\Controllers\ReservasiController@insert');

Route::middleware(['auth'])->group(function(){
    // masukan routing disini
  
    Route::get('/Karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
    Route::get('/Karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
    Route::post('/Karyawan/store', [KaryawanController::class, 'store'])->name('karyawan.store');
    Route::get('/Karyawan/edit/{id}', [KaryawanController::class, 'edit'])->name('karyawan.edit');
    Route::post('/Karyawan/update/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');
    Route::delete('/Karyawan/delete/{id}', [KaryawanController::class, 'delete'])->name('karyawan.delete');
});


Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');