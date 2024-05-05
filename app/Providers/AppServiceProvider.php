<?php

namespace App\Providers;

use App\Repositories\Interface\IIrrigationMonitorRepository;
use App\Repositories\Interface\ILogRepository;
use App\Repositories\Interface\IUserRepository;
use App\Repositories\IrrigationMonitorRepository;
use App\Repositories\LogRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            IUserRepository::class,
            UserRepository::class
        );
        $this->app->bind(
            IIrrigationMonitorRepository::class,
            IrrigationMonitorRepository::class
        );
        $this->app->bind(
            ILogRepository::class,
            LogRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
