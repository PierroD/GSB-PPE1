<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\Cart;
use App\Produit;

class ShoppingController extends Controller
{
    public function getIndex()
    {
        if(Auth::check())
        {
        if(\Cart::isEmpty())
        {
            $empty = true;          
            return view("cart", compact("empty"));  
        }
        else
        {
        $ItemsCollection = \Cart::getContent();
        return view("cart", compact('ItemsCollection'));
        }
        }
        else
        {
            $notConnected = true;
            return view("cart", \compact("notConnected"));
        }
    }
    public function add($id)
    {
        if(Auth::check())
        {
            $produit = Produit::find($id);
            \Cart::add($produit->id, $produit->title, $produit->price, 1, array());
            $ItemsCollection = \Cart::getContent();
            return view("cart", compact('ItemsCollection'));
        }
        else
        {
            $notConnected = true;
            return view("cart", \compact("notConnected"));
        }
    }
}
