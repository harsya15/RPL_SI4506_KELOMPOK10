<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage.index');
});

//route untuk insert data ke order_meja
Route::post('/insert', 'App\Http\Controllers\ReservasiController@insert');