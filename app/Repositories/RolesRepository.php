<?php

namespace App\Repositories;
use Illuminate\Support\Facades\Auth;
use App\Roles;



class RolesRepository implements RolesRepositoryInterface
{
    public function get($Roles_id)
    {
        return Roles::find($Roles_id);
    }
    public function all()
    {
        return Roles::all();
    }
    public function delete($Roles_id)
    {
        Roles::destroy($Roles_id);
    }
    public function update($Roles_id, array $Roles_data)
    {
        Roles::find($Roles_id)->update($Roles_data);
    }
}
