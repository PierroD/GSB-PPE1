<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\RolesRepositoryInterface;
//use App\Http\Controllers\Auth;

class RolesController extends Controller
{
    protected $repositoryRoles;

    public function __construct(RolesRepositoryInterface $repositoryRoles)
    {
        $this->repositoryRoles = $repositoryRoles;
    }

    public function getRoleProfile()
    {
        $role = $this->repositoryRoles->get(Auth::User()->id); 
        return view('profil', compact('role'));
    }
}
