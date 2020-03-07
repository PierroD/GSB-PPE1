<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Order;
use App\Payments;


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
            $products = \Cart::session(Auth::User()->id)->getContent();
            $CartSubTotalPrice = \Cart::session(Auth::User()->id)->getSubTotal();
            $CartTotalPrice = \Cart::session(Auth::User()->id)->getTotal();
            $CartConditions = \Cart::getConditions();
            return view('shopping.checkout', compact('clientSecret', 'products', 'CartSubTotalPrice', 'CartTotalPrice', 'CartConditions'));
        }
        else
        {
            return \redirect()->action('ProduitController@getIndex');
        }
    }
    public function store(Request $request)
    {
        // \Cart::session(Auth::User()->id)->clear();
        // $data = $request->json()->all();
        // return $data['paymentIntent'];
        $data = $request->json()->all();
        
        $payment = new Payments();
        $payment->user_id = Auth::User()->id;
        $payment->payment_intent_id = $data['paymentIntent']['id']; 
        $payment->payment_created_at = (new \DateTime('NOW'))->setTimestamp($data['paymentIntent']['created'])->format('Y-m-d H:i:s');
        $payment->global_quantity = \Cart::session(Auth::User()->id)->getTotalQuantity();
        $payment->amount = $data['paymentIntent']['amount'];
        $payment->currency = $data['paymentIntent']['currency'];
        $payment->save();

        $i = 0;  
        foreach (\Cart::session(Auth::User()->id)->getContent() as $product){
            $order = new Order();
            $order->payment_intent_id = $data['paymentIntent']['id']; 
            $order->payment_created_at = (new \DateTime('NOW'))->setTimestamp($data['paymentIntent']['created'])->format('Y-m-d H:i:s');    
            $order->produit_id = $product->id;
            $order->quantity = $product->quantity;
            $order->price = $product->price;
            $order->save();
            $i++;
        }
        
        if($data['paymentIntent']['status'] === 'succeeded'){
            \Cart::session(Auth::User()->id)->clear();
            Session::flash('success', 'Commande passée avec succès');
            return response()->json(['success' => 'Payment Intent Succeeded']);
        } else{
            return response()->json(['error' => 'Payment Intent Not Succeeded']);
        }
    }

    public function thankYou()
    {
        return Session::has('success') ? view('shopping.thankyou') : \redirect()->action('ProduitController@getIndex');
    }
}
