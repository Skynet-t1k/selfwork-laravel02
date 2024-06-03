<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/aboutus', [AboutUsController::class, 'aboutUs'])->name('aboutus');

Route::get('/services', [ServicesController::class, 'services'])->name('services');

Route::get('/aboutus/dettaglio/{id}', [AboutUsController::class, 'detail'])->name('dettaglio');

Route::get('/services/dettaglio/{id}', [ServicesController::class, 'detail'])->name('services.detail');
