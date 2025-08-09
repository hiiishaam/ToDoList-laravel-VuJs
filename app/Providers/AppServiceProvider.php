<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\TaskRepository;
use App\Services\TaskService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
   public function register()
    {
        $this->app->bind(TaskRepository::class, function () {
            return new TaskRepository();
        });

        $this->app->bind(TaskService::class, function ($app) {
            return new TaskService($app->make(TaskRepository::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
