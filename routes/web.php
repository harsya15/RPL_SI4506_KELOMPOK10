<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ReservasiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landingPage', ['title' => 'Landing Page | Sate Balibul']);
})->name('landingPage');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/home', function () {
    return view('home');
});

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('/Admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/Admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::get('/Admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::post('/Admin/store', [AdminController::class, 'store'])->name('admin.store');
Route::post('/Admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/Admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');

Route::get('/Cabang', [CabangController::class, 'index'])->name('cabang.index');
Route::get('/Cabang/create', [CabangController::class, 'create'])->name('cabang.create');
Route::get('/Cabang/edit/{id}', [CabangController::class, 'edit'])->name('cabang.edit');
Route::post('/Cabang/store', [CabangController::class, 'store'])->name('cabang.store');
Route::post('/Cabang/update/{id}', [CabangController::class, 'update'])->name('cabang.update');
Route::delete('/Cabang/delete/{id}', [CabangController::class, 'delete'])->name('cabang.delete');

Route::get('/Karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::get('/Karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
Route::get('/Karyawan/edit/{id}', [KaryawanController::class, 'edit'])->name('karyawan.edit');
Route::post('/Karyawan/store', [KaryawanController::class, 'store'])->name('karyawan.store');
Route::post('/Karyawan/update/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');
Route::delete('/Karyawan/delete/{id}', [KaryawanController::class, 'delete'])->name('karyawan.delete');

Route::get('/Rating', [RatingController::class, 'index'])->name('rating.index');
Route::get('/Rating/create', [RatingController::class, 'create'])->name('rating.create');
Route::get('/Rating/edit/{id}', [RatingController::class, 'edit'])->name('rating.edit');
Route::post('/Rating/store', [RatingController::class, 'store'])->name('rating.store');
Route::post('/Rating/update/{id}', [RatingController::class, 'update'])->name('rating.update');
Route::delete('/Rating/delete/{id}', [RatingController::class, 'delete'])->name('rating.delete');

Route::get('/Reservasi', [ReservasiController::class, 'index'])->name('reservasi.index');
Route::get('/Reservasi/create', [ReservasiController::class, 'create'])->name('reservasi.create');
Route::get('/Reservasi/edit/{id}', [ReservasiController::class, 'edit'])->name('reservasi.edit');
Route::post('/Reservasi/store', [ReservasiController::class, 'store'])->name('reservasi.store');
Route::post('/Reservasi/update/{id}', [ReservasiController::class, 'update'])->name('reservasi.update');
Route::delete('/Reservasi/delete/{id}', [ReservasiController::class, 'delete'])->name('reservasi.delete');
