<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth'])->group(function(){
    // masukan routing disini
    Route::get('/Menu', [MenuController::class, 'index'])->name('Menu.index');
    Route::get('/Menu/create', [MenuController::class, 'create'])->name('Menu.create');
    Route::post('/Menu/store', [MenuController::class, 'store'])->name('Menu.store');
    Route::get('/Menu/edit/{id}', [MenuController::class, 'edit'])->name('Menu.edit');
    Route::post('/Menu/update/{id}', [MenuController::class, 'update'])->name('Menu.update');
    Route::delete('/Menu/delete/{id}', [MenuController::class, 'delete'])->name('Menu.delete');
});

Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
