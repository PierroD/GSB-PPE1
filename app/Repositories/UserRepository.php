<?php

namespace App\Repositories;

use App\User;


class UserRepository implements UserRepositoryInterface
{
    public function get($user_id)
    {
        return User::find($user_id);
    }
    public function all()
    {
        return User::all();
    }
    public function delete($user_id)
    {
        User::destroy($user_id);
    }
    public function update($user_id, array $user_data)
    {
        User::find($user_id)->update($user_data);
    }
    public function getOrderBy($data, $type)
    {
        return User::orderBy($data, $type)->get();
    }
}
