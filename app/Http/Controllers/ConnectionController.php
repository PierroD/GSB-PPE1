<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\Auth\RegisterRequest;

class ConnectionController extends Controller
{

    public function register(RegisterRequest $request)
    {

        if (Auth::check() == false) {
            $request['password'] = Hash::make($request['password']);
            User::create($request->all());
        } else {
            return redirect()->action('ProduitController@getIndex');
        }
    }
    public function validation($request)
    {
    }
    public function connection(Request $request)
    {
        if (Auth::check() == false) {
            $mail = $request->get('mail');
            $mdpconnect = $request->get('password');
            if (!empty($mail) && !empty($mdpconnect)) {
                Auth::attempt(['mail' => $mail, 'password' => $mdpconnect]);
                return redirect()->action('ProduitController@getIndex');
            }
        } else {
            return redirect()->action('ProduitController@getIndex');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->action('ProduitController@getIndex');
    }
}
