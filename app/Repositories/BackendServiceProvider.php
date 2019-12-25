<?php

namespace App\Repositories;

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
            'App\Repositories\ClientRepositoryInterface',
            'App\Repositories\ClientRepository'
        );
    }

}
