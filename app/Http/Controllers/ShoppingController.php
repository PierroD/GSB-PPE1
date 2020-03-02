<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\Cart;
use App\Produit;
use App\User;
use \Darryldecode\Cart\CartCondition;

class ShoppingController extends Controller
{

    public function getIndex()
    {
        if(Auth::check())
        {
        if(\Cart::session(Auth::User()->id)->isEmpty())
        {
            $empty = true;          
            return view("shopping.cart", compact("empty"));  
        }
        else
        {
            $commission = new CartCondition(array(
                'name' => 'Commission de 5%',
                'type' => 'tax',
                'target' => 'total', // this condition will be applied to cart's total when getTotal() is called.
                'value' => '5%',
                'order' => 1 // the order of calculation of cart base conditions. The bigger the later to be applied.
            ));
            \Cart::session(Auth::User()->id)->clearCartConditions();
            \Cart::session(Auth::User()->id)->condition($commission);
            
            $ItemsCollection = \Cart::session(Auth::User()->id)->getContent();
            $CartSubTotalPrice = \Cart::session(Auth::User()->id)->getSubTotal();
            $CartTotalPrice = \Cart::session(Auth::User()->id)->getTotal();
            $CartConditions = \Cart::getConditions();
            return view("shopping.cart", compact("ItemsCollection", "CartSubTotalPrice", "CartTotalPrice", "CartConditions"));
        }
        }
        else

        {
            $notConnected = true;
            return view("shopping.cart", compact("notConnected"));
        }
    }

    public function add($id, $quantity)
    {
        if(Auth::check())
        {
            $produit = Produit::find($id);
            \Cart::session(Auth::User()->id)->add($produit->id, $produit->title, $produit->price, $quantity, array());
            return redirect()->action('ShoppingController@getIndex');
        }
        else
        {
            $notConnected = true;
            return view("shopping.cart", compact("notConnected"));
        }
    }

    public function delete($id)
    {
        if(Auth::check())
        {
            \Cart::session(Auth::User()->id)->remove($id);
            return redirect()->action('ShoppingController@getIndex');
        }
        else
        {
            $notConnected = true;
            return view("shopping.cart", compact("notConnected"));
        }
    }
    public function empty()
    {
        if(Auth::check())
        {
            \Cart::session(Auth::User()->id)->clear();
            return redirect()->action('ShoppingController@getIndex');
        }
        else
        {
            $notConnected = true;
            return view("shopping.cart", compact("notConnected"));
        } 
    }


}
