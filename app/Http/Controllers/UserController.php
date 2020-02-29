<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepositoryInterface;

class UserController extends Controller 
{
    protected $repositoryClient;

    public function __construct(UserRepositoryInterface $repositoryClient)
    {
        $this->repositoryClient = $repositoryClient;
    }

    public function getAll()
    {
        $all = $this->repositoryClient->all();
        return view('list', compact('all'));
    }



}
