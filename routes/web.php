<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CustomerMiddleware;
use App\Http\Middleware\KaryawanMiddleware;
use App\Http\Middleware\ManagerMiddleware;

Route::get('/', [HomeController::class, 'index'])->name('landingPage');

Route::middleware(['auth', CustomerMiddleware::class])->group(function(){
    Route::post('/insert', 'App\Http\Controllers\ReservasiController@insert');
    Route::post('/getintouch', 'App\Http\Controllers\ReservasiController@getintouch');
    Route::post('/insert', 'App\Http\Controllers\KontakController@insert');

    // keranjang
    Route::get('keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
    Route::post('/keranjang/update', [KeranjangController::class, 'update'])->name('keranjang.update');
    Route::delete('/keranjang/{id}', [KeranjangController::class, 'destroy'])->name('keranjang.destroy');

    Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
    Route::post('/keranjang/store/{id}', [KeranjangController::class, 'store'])->name('keranjang.store');
    Route::put('/keranjang/update', [KeranjangController::class, 'update'])->name('keranjang.update');
    Route::delete('/keranjang/delete/{id}', [KeranjangController::class, 'delete'])->name('keranjang.delete');

    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::post('/order/submit', [OrderController::class, 'submitOrder'])->name('submitOrder');
    Route::get('/order/success', [OrderController::class, 'showSuccessPage'])->name('orderSuccess');

    // CLAIM
    Route::get('/order/input-nomor-hp', [OrderController::class, 'inputNomorHp'])->name('order.inputNomorHp');
    Route::post('/order/check-points', [OrderController::class, 'checkPoints'])->name('order.checkPoints');
    Route::post('/order/select-items', [OrderController::class, 'selectItems'])->name('order.selectItems');
    Route::post('/order/process-claim', [OrderController::class, 'processClaim'])->name('order.processClaim');

});

Route::middleware(['auth', KaryawanMiddleware::class])->group(function(){
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


    Route::get('/Karyawan/laporan', [LaporanController::class, 'create'])->name('laporan.create');
    Route::post('/Karyawan/laporan/store', [LaporanController::class, 'store'])->name('laporan.store');

    Route::get('/Rating', [RatingController::class, 'index'])->name('rating.index');
    Route::get('/Rating/create', [RatingController::class, 'create'])->name('rating.create');
    Route::get('/Rating/edit/{id}', [RatingController::class, 'edit'])->name('rating.edit');
    Route::post('/Rating/store', [RatingController::class, 'store'])->name('rating.store');
    Route::post('/Rating/update/{id}', [RatingController::class, 'update'])->name('rating.update');
    Route::delete('/Rating/delete/{id}', [RatingController::class, 'delete'])->name('rating.delete');

    Route::get('/Cabang', [CabangController::class, 'index'])->name('cabang.index');
    Route::get('/Cabang/create', [CabangController::class, 'create'])->name('cabang.create');
    Route::get('/Cabang/edit/{id}', [CabangController::class, 'edit'])->name('cabang.edit');
    Route::post('/Cabang/store', [CabangController::class, 'store'])->name('cabang.store');
    Route::post('/Cabang/update/{id}', [CabangController::class, 'update'])->name('cabang.update');
    Route::delete('/Cabang/delete/{id}', [CabangController::class, 'delete'])->name('cabang.delete');

    Route::get('/Reservasi', [ReservasiController::class, 'index'])->name('Reservasi.index');
    Route::get('/Reservasi/edit/{id}', [ReservasiController::class, 'edit'])->name('Reservasi.edit');
    Route::post('/Reservasi/update/{id}', [ReservasiController::class, 'update'])->name('Reservasi.update');
    Route::delete('/Reservasi/delete/{id}', [ReservasiController::class, 'delete'])->name('Reservasi.delete');

});

Route::middleware(['auth'])->group(function () {
    // Routes yang memerlukan auth
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::post('/order/submit', [OrderController::class, 'submitOrder'])->name('submitOrder');
    Route::get('/order/success', [OrderController::class, 'showSuccessPage'])->name('orderSuccess');
    Route::get('/order/cekdelivery/{nohp}', [OrderController::class, 'cekdelivery'])->name('order.cekdelivery');
    Route::get('/order/read/', [OrderController::class, 'read'])->name('order.read');
    Route::get('/order/delete/{id}/{nohp}', [OrderController::class, 'delete'])->name('order.delete');
    Route::get('/order/updatestatus/{id}/{status}', [OrderController::class, 'updatestatus'])->name('order.updatestatus');

    
    // Routes CLAIM
    Route::get('/order/input-nomor-hp', [OrderController::class, 'inputNomorHp'])->name('order.inputNomorHp');
    Route::post('/order/check-points', [OrderController::class, 'checkPoints'])->name('order.checkPoints');
    Route::post('/order/select-items', [OrderController::class, 'selectItems'])->name('order.selectItems');
    Route::post('/order/process-claim', [OrderController::class, 'processClaim'])->name('order.processClaim');


    // Route untuk user access
    Route::get('/userAccess', [UserController::class, 'index'])->name('userAccess');

    // Group middleware Karyawan
    Route::middleware([KaryawanMiddleware::class])->group(function(){
        Route::get('/Menu', [MenuController::class, 'index'])->name('Menu.index');
        Route::get('/Menu/create', [MenuController::class, 'create'])->name('Menu.create');
        Route::post('/Menu/store', [MenuController::class, 'store'])->name('Menu.store');
        Route::get('/Menu/edit/{id}', [MenuController::class, 'edit'])->name('Menu.edit');
        Route::post('/Menu/update/{id}', [MenuController::class, 'update'])->name('Menu.update');
        Route::delete('/Menu/delete/{id}', [MenuController::class, 'delete'])->name('Menu.delete');

        // Routes Karyawan
        Route::get('/Karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
        Route::get('/Karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
        Route::post('/Karyawan/store', [KaryawanController::class, 'store'])->name('karyawan.store');
        Route::get('/Karyawan/edit/{id}', [KaryawanController::class, 'edit'])->name('karyawan.edit');
        Route::post('/Karyawan/update/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');
        Route::delete('/Karyawan/delete/{id}', [KaryawanController::class, 'delete'])->name('karyawan.delete');

        // Routes untuk laporan
        Route::get('/Karyawan/laporan', [LaporanController::class, 'create'])->name('laporan.create');
        Route::post('/Karyawan/laporan/store', [LaporanController::class, 'store'])->name('laporan.store');

        // Routes untuk rating
        Route::get('/Rating', [RatingController::class, 'index'])->name('rating.index');
        Route::get('/Rating/create', [RatingController::class, 'create'])->name('rating.create');
        Route::get('/Rating/edit/{id}', [RatingController::class, 'edit'])->name('rating.edit');
        Route::post('/Rating/store', [RatingController::class, 'store'])->name('rating.store');
        Route::post('/Rating/update/{id}', [RatingController::class, 'update'])->name('rating.update');
        Route::delete('/Rating/delete/{id}', [RatingController::class, 'delete'])->name('rating.delete');

        // Routes untuk cabang
        Route::get('/Cabang', [CabangController::class, 'index'])->name('cabang.index');
        Route::get('/Cabang/create', [CabangController::class, 'create'])->name('cabang.create');
        Route::get('/Cabang/edit/{id}', [CabangController::class, 'edit'])->name('cabang.edit');
        Route::post('/Cabang/store', [CabangController::class, 'store'])->name('cabang.store');
        Route::post('/Cabang/update/{id}', [CabangController::class, 'update'])->name('cabang.update');
        Route::delete('/Cabang/delete/{id}', [CabangController::class, 'delete'])->name('cabang.delete');

        // Routes untuk keranjang
        Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
        Route::post('/keranjang/update', [KeranjangController::class, 'update'])->name('keranjang.update');
        Route::delete('/keranjang/{id}', [KeranjangController::class, 'destroy'])->name('keranjang.destroy');
    });

    // Group middleware Manager
    Route::middleware([ManagerMiddleware::class])->group(function(){
        // Routes untuk Manager
        Route::get('/Karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
        Route::get('/Karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
        Route::post('/Karyawan/store', [KaryawanController::class, 'store'])->name('karyawan.store');
        Route::get('/Karyawan/edit/{id}', [KaryawanController::class, 'edit'])->name('karyawan.edit');
        Route::post('/Karyawan/update/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');
        Route::delete('/Karyawan/delete/{id}', [KaryawanController::class, 'delete'])->name('karyawan.delete');
    });
});

// Route untuk menyimpan item
Route::post('/items/save', [ItemController::class, 'save'])->name('items.save');

// Route untuk otentikasi
Auth::routes();

Route::get('/admin', [UserController::class, 'index'])->name('admin');
