<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PasienController::class, 'index']);

Route::get('/pasien', [PasienController::class, 'index'])
    ->name('pasien.index');

Route::get('/pasien/create', [PasienController::class, 'create'])
    ->name('pasien.create');

Route::post('/pasien/store', [PasienController::class, 'store'])
    ->name('pasien.store');