<?php

namespace App\Utils\Cart;

use App\Produit;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Log;

class Cart
{
    protected $cart;
    private $sessionManager;

    public function __construct(Cart $c = null, SessionManager $sessionManager = null)
    {
        $this->cart = $c;
        $this->sessionManager = $sessionManager;
    }

    public function add(Produit $produit): void
    {
        if (isset($this->cart)) {
            foreach ($this->cart as $prod) {
                if ($prod->getId() == $produit->getId()) {
                    $prod->setQuantite($prod->getQuantite() + $produit->getQuantite());
                    break;
                } else {
                    $this->cart[] = $produit;
                }
            }
        } else {
            $this->cart[] = $produit;
        }
        session()->put('cart', $this->cart);
        Log::warning(session()->get('cart'));
    }
    public function Countproduit(): int
    {
        $count = 0;
        foreach ($this->cart as $prod) {
            $count++;
        }
        return $count;
    }

    public function Count(): int
    {
        $count = 0;
        foreach ($this->cart as $prod) {
            $count += $prod->getQuantite();
        }
        return $count;
    }
    public function delete(Produit $produit): void
    {
        foreach ($this->cart as $prod) {
            if ($prod->getId() == $produit->getId()) {
                unset($this->cart[$produit->getId()]);
            }
        }
        session()->forget('cart');
    }
}
