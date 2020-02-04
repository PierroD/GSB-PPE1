<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utils\Cart\Cart;
use App\Produit;

class TestController extends Controller
{
    public function test1(Cart $c)
    {
        $produit = Produit::find(2);
        $c->add($produit);
        dd($c);
        //        $c = new \App\Cart();

    }
}
