<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\User;
use Darryldecode\Cart\Cart;
use App\Http\Requests\Auth\RegisterRequest;

class AuthenticationRepository implements AuthenticationRepositoryInterface
{
    public function register(RegisterRequest $request)
    {
        if (Auth::check() == false) {
            $request['password'] = Hash::make($request['password']);
            User::create($request->all());
            return true;
        } else {
            return false;
        }
    }

    public function signin(Request $request)
    {
        $bool = false;
        if (Auth::check() == false) {
            $mail = $request->get('mail');
            $mdpconnect = $request->get('password');
            if (Auth::attempt(['mail' => $mail, 'password' => $mdpconnect]) == true) {  
                \Cart::session(Auth::User()->id);
               $bool = true;
            }
        } else {
            $bool = false;
        }
        return $bool;
    }
    public function logout()
    {
        Auth::logout();
    }
}