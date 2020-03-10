<?php

namespace App\Repositories;

use App\Company;


class CompanyRepository implements CompanyRepositoryInterface
{
    public function get($company_id)
    {
        return Company::find($company_id);
    }
    public function all()
    {
        return Company::all();
    }
    public function delete($company_id)
    {
        Company::destroy($company_id);
    }
    public function update($company_id, array $company_data)
    {
        Company::find($company_id)->update($company_data);
    }
    public function getOrderBy($data, $type)
    {
        return Company::orderBy($data, $type)->get();
    }
}
