<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function find($id)
    {
        $produit = Produit::find($id);

        return view('kit', compact('produit'));
    }
}
