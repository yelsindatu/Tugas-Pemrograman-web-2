<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pasien', [PasienController::class, 'index']);

Route::get('/pasien/create', [PasienController::class, 'create']);