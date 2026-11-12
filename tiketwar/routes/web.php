<?php

use App\Http\Controllers\KonserController;
use App\Http\Controllers\PromotorController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/tentang', 'about')->name('tentang');

Route::get('/konser', [KonserController::class, 'index'])->name('konser.index');

Route::get('/konser/{id}', [KonserController::class, 'show'])
    ->whereNumber('id')
    ->name('konser.detail');

Route::get('/konser/create', [KonserController::class, 'create'])
    ->name('konser.create');

Route::post('/konser', [KonserController::class, 'store'])->name('konser.store');

Route::get('/konser/{id}/edit', [KonserController::class, 'edit'])
    ->whereNumber('id')->name('konser.edit');

Route::put('/konser/{id}', [KonserController::class, 'update'])
    ->whereNumber('id')->name('konser.update');

Route::delete('/konser/{id}', [KonserController::class, 'destroy'])
    ->whereNumber('id')->name('konser.destroy');

Route::get('/promotor', [PromotorController::class, 'index'])->name('promotor.index');

Route::get('/konser/{konser}/pesan', [PesananController::class, 'create'])
    ->whereNumber('konser')->name('pesanan.create');
    
Route::post('/konser/{konser}/pesan', [PesananController::class, 'store'])
    ->whereNumber('konser')->name('pesanan.store');