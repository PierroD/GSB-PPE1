<?php

namespace App\Repositories;

interface ProduitRepositoryInterface
{
    public function get($produit_id);
    public function all();
    public function delete($produit_id);
    public function update($produit_id, array $produit_data);
    public function getNew();
    public function getOrderBy($data, $type);
}
