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
    public function getAllSociety()
    {
        $societies = $this->repositoryClient->all();
        return view('listSocieties', compact('societies'));
    }
    public function getAllKitbyNameDesc()
    {
        $societies = $this->repositoryClient->getOrderBy('company', 'desc');
        $title = "Les Laboratoires par nom Décroissant";
        return view('listSocieties', compact('societies', 'title'));
    }
    public function getAllKitbyNameAsc()
    {
        $societies = $this->repositoryClient->getOrderBy('company', 'asc');
        $title = "Les Laboratoires par nom Décroissant";
        return view('listSocieties', compact('societies', 'title'));
    }
}
