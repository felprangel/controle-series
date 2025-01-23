<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::controller(SeriesController::class)->group(function() {
    Route::get('/series', 'index')->name('series.index');
    Route::get('/series/criar', 'create')->name('series.create');
    Route::post('/series', 'store');
});

