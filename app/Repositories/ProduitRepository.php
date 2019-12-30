<?php

namespace App\Repositories;

use App\Produit;


class ProduitRepository implements ProduitRepositoryInterface
{
    public function get($produit_id)
    {
        return Produit::find($produit_id);
    }
    public function all()
    {
        return Produit::all();
    }
    public function delete($produit_id)
    {
        Produit::destroy($produit_id);
    }
    public function update($produit_id, array $produit_data)
    {
        Produit::find($produit_id)->update($produit_data);
    }

    public function getNew()
    {
        // return Produit::lastest()->get();
    }
    public function getOrderBy($data, $type)
    {
        return Produit::orderBy($data, $type)->get();
    }
}
