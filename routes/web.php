<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::middleware(['auth'])->group(function(){
    // masukan routing disini
    Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
    Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::post('/Menu/store', [MenuController::class, 'store'])->name('menu.store');
    Route::get('/Menu/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
    Route::post('/Menu/update/{id}', [MenuController::class, 'update'])->name('menu.update');
    Route::delete('/Menu/delete/{id}', [MenuController::class, 'delete'])->name('menu.delete');
});

Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->name('admin');