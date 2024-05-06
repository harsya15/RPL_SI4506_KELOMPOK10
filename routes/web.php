<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('landingPage');
});

Route::post('/insert', 'App\Http\Controllers\ReservasiController@insert');

Route::middleware(['auth'])->group(function(){
    // masukan routing disini

});


Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
