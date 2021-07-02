<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\{ Customer, Service };
use App\Observers\{ CustomerObserver, ServiceObserver };

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /*$this->app->bind('path.public', function() {
            return '/home/cleanspaces/public_html'; 
        });*/
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Customer::observe(CustomerObserver::class);
        Service::observe(ServiceObserver::class);
    }
}
