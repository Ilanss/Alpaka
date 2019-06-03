<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Login extends Controller
{
    public function auth(Request $request)
    {
        print_r($request->input());

        $data = ['email' => $request->input('email'), 'password' => Hash::make($request->input('password'))];

        if(Auth::attempt($data)){
            echo 'Réussi';
        } else{
            echo 'Erreur';
            var_dump($data);
        }

    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

}
