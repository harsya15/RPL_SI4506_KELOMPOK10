<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('landingPage');
});

Route::middleware(['auth'])->group(function(){
    // masukan routing disini

});

Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->name('admin');