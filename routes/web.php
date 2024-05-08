<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\formBookingController;
use App\Http\Controllers\RuanganController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pengguna', [UserController::class, 'pengguna']);
Route::get('/peminjaman', function(){
    return view('peminjaman');
});
// Route::get('/booking', function(){
//     return view('booking');
// });
// Route::get('/booking', 'BookingController')->name('booking.store');
Route::get('/booking', [formBookingController::class, 'formRuangan']);
Route::post('/booking', [formBookingController::class, 'simpanData']);

Route::get('/ruangan', [RuanganController::class, 'index']);
// Route::get('/ruangan', function(){
//     return view('ruangan');
// });
require __DIR__.'/auth.php';
