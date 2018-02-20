<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\UserOnboarding\UserOnboardingInterface;
use App\Repositories\UserOnboarding\UserOnboardingRepository;


class BackendServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\UserOnboarding\UserOnboardingInterface', 'App\Repositories\UserOnboarding\UserOnboardingRepository');
    }
}
