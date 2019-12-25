<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ClientRepositoryInterface;

class ClientController extends Controller
{
    protected $repositoryClient;

    public function __construct(ClientRepositoryInterface $repositoryClient)
    {
        $this->repositoryClient = $repositoryClient;
    }

    public function getAll()
    {
        $all = $this->repositoryClient->all();
        $title = "Les kits et laboratoires";
        return view('list', compact('all', 'title'));
    }
    public function getAllSociety()
    {
        $societies = $this->repositoryClient->all();
        $title = "Les laboratoires";
        return view('list', compact('societies', 'title'));
    }
}
