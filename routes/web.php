<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::post('/upload', [MainController::class, 'store'])->name('upload');

Route::get('/{short_url}', [MainController::class, 'download'])->name('redirect');
