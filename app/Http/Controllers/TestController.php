<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Cart;

class TestController extends Controller
{
    public function test1(Cart $c, Request $r)
    {
//        $c = new \App\Cart();
        dd($c);
    }
}
