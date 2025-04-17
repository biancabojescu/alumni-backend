<?php

namespace App\Providers;

use App\Repositories\Eloquent\AlumnRepository;
use App\Repositories\IAlumnRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IAlumnRepository::class, AlumnRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
