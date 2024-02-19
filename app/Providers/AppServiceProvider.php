<?php

namespace App\Providers;

use App\Models\Request;
use Illuminate\Support\ServiceProvider;
use App\Observers\RequestObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Request::observe(RequestObserver::class);
    }
}
