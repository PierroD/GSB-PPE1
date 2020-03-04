<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Stripe\Stripe;
use Stripe\PaymentIntent;


class PaiementController extends Controller
{
    public function index()
    {
        if(!\Cart::session(Auth::User()->id)->isEmpty())
        {
            Stripe::setApiKey('sk_test_SdH0Su8YvuF48GKL5KsXVwln00UXONbzNL');
            $intent = PaymentIntent::create([
                'amount' => round(\Cart::session(Auth::User()->id)->getTotal()*100),
                'currency' => 'eur',
                // 'metadata' =>
                // [
                //     'userId' => Auth::User()->id
                // ]
            ]);
            // dd($intent);
            $clientSecret = Arr::get($intent, 'client_secret');
            return view('shopping.checkout', compact('clientSecret'));
        }
        else
        {
            return \redirect()->action('ProduitController@getIndex');
        }
    }
    public function store(Request $request)
    {
        \Cart::session(Auth::User()->id)->clear();
        $data = $request->json()->all();
        return $data['paymentIntent'];
    }
}
