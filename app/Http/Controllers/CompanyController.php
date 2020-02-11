<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CompanyRepositoryInterface;

class CompanyController extends Controller
{
    protected $repositoryCompany;

    public function __construct(CompanyRepositoryInterface $repositoryCompany)
    {
        $this->repositoryCompany = $repositoryCompany;
    }

    public function getList()
    {
        $all = $this->repositoryCompany->all();
        return view('list', compact('all'));
    }
    public function getCompanies()
    {
        $companies = $this->repositoryCompany->all()->sortBy('name');
        return view('register', compact('companies'));
    }
}
