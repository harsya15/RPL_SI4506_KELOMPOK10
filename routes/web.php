<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KaryawanController;

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
});


Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->name('admin');