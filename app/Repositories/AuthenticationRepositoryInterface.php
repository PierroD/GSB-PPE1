<?php


namespace App\Repositories;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterRequest;

interface AuthenticationRepositoryInterface
{
    public function register(RegisterRequest $request);
    public function signin(Request $request);
    public function logout();

}
