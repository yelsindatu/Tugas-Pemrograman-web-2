<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoliController;

Route::resource('/poli', PoliController::class);
Route::resource('/pasien', PasienController::class);