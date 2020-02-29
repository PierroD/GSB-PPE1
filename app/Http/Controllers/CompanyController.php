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
    public function getAllSociety()
    {
        $societies = $this->repositoryCompany->all();
        $title = \Lang::get('listSocieties.allLaboratories');
        return view('listSocieties', compact('societies', 'title'));
    }
    public function getAllLaboratorybyNameDesc()
    {
        $societies = $this->repositoryCompany->getOrderBy('name', 'desc');
        $title = \Lang::get('listSocieties.descNameLaboratories');
        return view('listSocieties', compact('societies', 'title'));
    }
    public function getAllLaboratorybyNameAsc()
    {
        $societies = $this->repositoryCompany->getOrderBy('name', 'asc');
        $title = \Lang::get('listSocieties.ascNameLaboratories');
        return view('listSocieties', compact('societies', 'title'));
    }
}
