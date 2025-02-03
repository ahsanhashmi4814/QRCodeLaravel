<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QRCodeController;

Route::get('/', [QRCodeController::class, 'index']);
Route::post('upload', [QRCodeController::class, 'upload'])->name('upload');
