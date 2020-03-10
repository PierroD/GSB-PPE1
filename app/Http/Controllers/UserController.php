<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller 
{
    protected $repositoryClient;

    public function __construct(UserRepositoryInterface $repositoryClient)
    {
        $this->repositoryClient = $repositoryClient;
    }

    public function getAll()
    {
        if(Auth::check() && Auth::User()->role->authorization == 2)
        {
        $users = $this->repositoryClient->all();
        return view('admin.index', compact('users'));
        }
        else
        {
            abort(404);
        }
    }



}
