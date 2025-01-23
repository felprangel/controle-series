<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::resource('/series', SeriesController::class)->only(['index', 'create', 'store']);

Route::post('/series/destroy/{id}', [SeriesController::class, 'destroy'])->name('series.destroy');

