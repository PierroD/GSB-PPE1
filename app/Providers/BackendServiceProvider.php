<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            'App\Repositories\ProduitRepositoryInterface',
            'App\Repositories\ProduitRepository'
        );
        $this->app->bind(
            'App\Repositories\UserRepositoryInterface',
            'App\Repositories\UserRepository'
        );
        $this->app->bind(
            'App\Repositories\AuthenticationRepositoryInterface',
            'App\Repositories\AuthenticationRepository'
        );
        $this->app->bind(
            'App\Repositories\CompanyRepositoryInterface',
            'App\Repositories\CompanyRepository'
        );
        $this->app->bind(
            'App\Repositories\RolesRepositoryInterface',
            'App\Repositories\RolesRepository'
        );
    }
}
