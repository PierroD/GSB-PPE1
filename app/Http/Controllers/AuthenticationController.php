<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\AuthenticationRepositoryInterface;

class AuthenticationController extends Controller
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
        $request->flash();
        if($this->repositoryAuth->register($request) == true)
        {
            return view('auth.login');
        }
        else
        {
            return view('auth.register');
        }
    }

    public function setSignin(Request $request)
    {
        $request->flash();
        if($this->repositoryAuth->signin($request) == 0)
        {
            return redirect()->action('ProduitController@getIndex');
        }
        if($this->repositoryAuth->signin($request) == 2)
        {
            return redirect()->action('UserController@getAll');
        }
        else
        {
            return view('auth.login');
        }
    }
    public function setLogout()
    {
        $this->repositoryAuth->logout();
        return redirect()->action('ProduitController@getIndex');
    }
}
