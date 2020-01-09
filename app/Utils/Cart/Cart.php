<?php

namespace App;

class Cart
{
    private $cart;
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
    }
}
