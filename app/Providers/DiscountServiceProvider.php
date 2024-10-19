<?php

namespace App\Providers;

use App\Services\DiscountService;
use Illuminate\Support\ServiceProvider;

class DiscountServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Bind the DiscountService to the container
        $this->app->singleton(DiscountService::class, function ($app) {
            return new DiscountService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
