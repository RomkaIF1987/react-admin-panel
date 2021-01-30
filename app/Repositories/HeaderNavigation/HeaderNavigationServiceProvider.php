<?php
namespace App\Repositories\HeaderNavigation;

use Illuminate\Support\ServiceProvider;

class HeaderNavigationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\HeaderNavigation\HeaderNavigationRepositoryInterface', 'App\Repositories\HeaderNavigation\HeaderNavigationRepository');
    }
}
