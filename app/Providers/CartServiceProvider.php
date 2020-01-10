<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Utils\Cart\Cart;
use Illuminate\Support\Facades\Log;

class CartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $cart = session()->get('cart');
        $this->app->singleton(Cart::class, function ($app) {
            if (isset($cart)) {
                return $cart;
            } else {
                Log::info("Creating Cart");
                return new Cart();
            }
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
