<?php

namespace App\Providers;

use App\Repositories\EloquentSeriesRepository;
use Illuminate\Support\ServiceProvider;
use SeriesRepository;

class SeriesRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SeriesRepository::class, EloquentSeriesRepository::class);
    }
}
