<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Scraping\JobSourceInterface;
use App\Services\Scraping\KarirhubJobSource;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(JobSourceInterface::class, KarirhubJobSource::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    if (config('app.env') === 'production' || app()->environment('production')) {
        URL::forceScheme('https');
    }
    }
}
