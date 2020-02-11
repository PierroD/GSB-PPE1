<?php

namespace App\Repositories;


interface RolesRepositoryInterface
{
    public function get($Roles_id);
    public function all();
    public function delete($Roles_id);
    public function update($Roles_id, array $Roles_data);
}
