<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class Register extends Controller
{
    public function store(Request $request)
    {
        //print_r($request->input());

        $user = new User();

        $user->username = $request->input('username');
        $user->lastname = $request->input('lastname');
        $user->firstname = $request->input('firstname');
        $user->gender = $request->input('gender');
        $user->birth_date = date("Y-m-d", strtotime($request->input('birth_date')));
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $createDate = Carbon::now();
        $user->created_at = date("Y-m-d", strtotime($createDate));
        $user->state = "client";



        if($user->gender !== 'Homme' || $user->gender !== 'Femme' || $user->birth_date <= $user->created_at){
            $error = "Certaines conditions ne sont pas respectées ('Homme' ou 'Femme', doit être majeur)";
            return Redirect::back()->withErrors($error);
        }
        else{
            $user->save();

            Auth::login($user, true);

            return redirect('/');
        }


    }
}
