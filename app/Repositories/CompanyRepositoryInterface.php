<?php

namespace App\Repositories;

interface CompanyRepositoryInterface
{
    public function get($company_id);
    public function all();
    public function delete($company_id);
    public function update($company_id, array $produit_data);
}
