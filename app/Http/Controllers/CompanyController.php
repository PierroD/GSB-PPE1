<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CompanyRepositoryInterface;
use Illuminate\Support\Facades\Auth;

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
        return view('lists.all', compact('all'));
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
        return view('lists.societies', compact('societies', 'title'));
    }
    public function getAllLaboratorybyNameDesc()
    {
        $societies = $this->repositoryCompany->getOrderBy('name', 'desc');
        $title = \Lang::get('listSocieties.descNameLaboratories');
        return view('lists.societies', compact('societies', 'title'));
    }
    public function getAllLaboratorybyNameAsc()
    {
        $societies = $this->repositoryCompany->getOrderBy('name', 'asc');
        $title = \Lang::get('listSocieties.ascNameLaboratories');
        return view('lists.societies', compact('societies', 'title'));
    }
    public function getSociety($id)
    {
        $society = $this->repositoryCompany->get($id);
        return view('society.index', compact('society'));
    }
    public function getAllCompanies()
    {
        if(Auth::check() && Auth::User()->role->authorization == 2)
        {
            $companies = $this->repositoryCompany->all();
            return view('admin.society', compact('companies'));
        }
        else
        {
            abort(404);
        }
    }
    public function deleteCompany($id)
    {
        if(Auth::check() && Auth::User()->role->authorization == 2)
        {
         }
        else
        {
            abort(404);
        }
    }
}
