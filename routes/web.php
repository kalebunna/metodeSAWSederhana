<?php

use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PesertaController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');
Route::resource('peserta', PesertaController::class);
// Route::resource('nilai', NilaiController::class);
Route::post('nilai/{nilai}', [NilaiController::class, 'update'])->name("nilai.update");
Route::get('nilai', [NilaiController::class, 'index'])->name("nilai.index");
Route::get('normalisasi', [NilaiController::class, 'showNormalisasi']);
Route::get('rangking', [NilaiController::class, 'rangking'])->name('rangking');
