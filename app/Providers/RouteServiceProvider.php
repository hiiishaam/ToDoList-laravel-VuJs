<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->routes(function () {
            // Routes API (prefix /api, middleware api)
            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));

            // Routes Web (middleware web)
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}
