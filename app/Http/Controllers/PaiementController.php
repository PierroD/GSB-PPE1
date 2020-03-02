<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Stripe\Stripe;
use Stripe\PaymentIntent;


class PaiementController extends Controller
{
    public function index()
    {
        Stripe::setApiKey('sk_test_SdH0Su8YvuF48GKL5KsXVwln00UXONbzNL');
        $intent = PaymentIntent::create([
            'amount' => round(\Cart::session(Auth::User()->id)->getTotal()),
            'currency' => 'eur',
        ]);
        // dd($intent);
        $clientSecret = Arr::get($intent, 'client_secret');
            return view('shopping.checkout', compact('clientSecret'));
    }
}
