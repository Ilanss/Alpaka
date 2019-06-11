<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Authentication extends Controller
{
    // Show form registration
    public function form(){
        
        return view('users.authentication',[
            'auth_user' => Auth::user()
        ]);
    }

    public function login(Request $request)
    {
        //print_r($request->input());

        $data = ['email' => $request->input('email'), 'password' => $request->input('password')];

        if (Auth::attempt($data)) {
            return redirect('/');
        } else {
            $error = "L'email ou le mot de passe sont incorrects";
            return back()->withErrors($error);
        }    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

}
