<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\AuthenticationRepositoryInterface;

class ConnectionController extends Controller
{
    protected $repositoryAuth;

    /**
     * ConnectionController constructor.
     *
     * @param AuthenticationRepositoryInterface $produit
     */
    public function __construct(AuthenticationRepositoryInterface $repositoryAuth)
    {
        $this->repositoryAuth = $repositoryAuth;
    }

    public function setRegister(RegisterRequest $request)
    {

        if($this->repositoryAuth->register($request) == true)
        {
            return view('login');
        }
        else
        {
            return view('register');
        }
    }

    public function setSignin(Request $request)
    {
        if($this->repositoryAuth->signin($request) == true)
        {
            return redirect()->action('ProduitController@getIndex');
        }
        else
        {
            return view('login');
        }
    }
    public function setLogout()
    {
        $this->repositoryAuth->logout();
        return redirect()->action('ProduitController@getIndex');
    }
}
