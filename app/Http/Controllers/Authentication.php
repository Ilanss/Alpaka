<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Auhtentification extends Controller
{
    // Show form registration
    public function index(){
        return view('users.authentication');
    }

    public function login(Request $request)
    {
        print_r($request->input());

        $data = ['email' => $request->input('email'), 'password' => $request->input('password')];

        if (Auth::attempt($data)) {
            return redirect('/');
        } else {
            echo 'Erreur <br/>';
            dd($data);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

}
