<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function get($user_id);
    public function all();
    public function delete($user_id);
    public function update($user_id, array $produit_data);
    public function getOrderBy($data, $type);
}
