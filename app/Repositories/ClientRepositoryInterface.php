<?php

namespace App\Repositories;

interface ClientRepositoryInterface
{
    public function get($client_id);
    public function all();
    public function delete($client_id);
    public function update($client_id, array $produit_data);
}
