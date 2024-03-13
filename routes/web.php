<?php

use App\Http\Controllers\SinhVienController;
use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TinController::class, 'index']);
Route::get('/lien-he', [TinController::class, 'lienhe']);
Route::get('/gioi-thieu', [TinController::class, 'gioithieu']);

Route::get('/ct/{id}', [TinController::class, 'lay1tin']);

Route::get('/sinhvien', [SinhVienController::class, 'index']);
