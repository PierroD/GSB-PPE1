<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ConnectionController extends Controller
{

    public function register(Request $request)
    {
        $this->validation($request);
        Client::create($request->all());
        return $request->all();
    }
    public function validation($request)
    {
        return $this->validate($request, [
            'last_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'company' => 'required|max:255',
            'mail' => 'required|email|unique:client|max:255',
            'password' => 'required|confirmed|max:255',
        ]);
    }
}
