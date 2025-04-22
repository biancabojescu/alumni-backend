<?php

namespace App\Providers;

use App\Repositories\IAuthRepository;
use App\Repositories\Eloquent\AlumnRepository;
use App\Repositories\Eloquent\AuthRepository;
use App\Repositories\Eloquent\LoginTokenRepository;
use App\Repositories\IAlumnRepository;
use App\Repositories\ILoginTokenRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IAlumnRepository::class, AlumnRepository::class);
        $this->app->bind(IAuthRepository::class, AuthRepository::class);
        $this->app->bind(ILoginTokenRepository::class, LoginTokenRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
