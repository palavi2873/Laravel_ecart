<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Getallproductservice;
use App\Facades\GetAllProduct;

class Fetchproductsprovider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
         $this->app->bind('getallproductservice', function ($container) {
            return new Getallproductservice();
        });

    }
     /**
     * Bootstrap the service
     */
    
    public function boot(): void
    {
     
    }
}
