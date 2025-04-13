<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD

=======
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
>>>>>>> 1e70163d92896a1e26c4bfd5364403e7bc9ad9bb
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
<<<<<<< HEAD
    public function boot(): void
    {
        //
    }
=======
    
public function boot()
{
    RateLimiter::for('verification', function (Request $request) {
        return Limit::perMinute(6)->by($request->user()?->id ?: $request->ip());
    });
}
>>>>>>> 1e70163d92896a1e26c4bfd5364403e7bc9ad9bb
}
