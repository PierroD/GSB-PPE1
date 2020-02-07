<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\Cart;
use App\Produit;
use App\User;

class ShoppingController extends Controller
{

    public function getIndex()
    {
        if(Auth::check())
        {
        if(\Cart::session(Auth::User()->id)->isEmpty())
        {
            $empty = true;          
            return view("cart", compact("empty"));  
        }
        else
        {
        $ItemsCollection = \Cart::session(Auth::User()->id)->getContent();
        $CartTotalPrice = \Cart::session(Auth::User()->id)->getTotal();
        return view("cart", compact("ItemsCollection", "CartTotalPrice"));
        }
        }
        else

        {
            $notConnected = true;
            return view("cart", compact("notConnected"));
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
            return view("cart", compact("notConnected"));
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
            return view("cart", compact("notConnected"));
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
            return view("cart", compact("notConnected"));
        } 
    }


}
