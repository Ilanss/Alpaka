<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class Register extends Controller
{
    public function store(Request $request)
    {
        // Validation des input
        $validatedData = $request->validate([
            'username' => 'required|max:20',
            'lastname' => 'required|max:45',
            'firstname' => 'required|max:45',
            'gender' => 'required',
            'birth_date' => 'required|date',
            'email' => 'required|max:45',
            'password' => 'required|max:255',
            'password-confirm' => 'required|max:255'
        ]);

//        print_r($request->input());
//        dd($validatedData);

        $user = new User();

        $user->username = $request->input('username');
        $user->lastname = $request->input('lastname');
        $user->firstname = $request->input('firstname');
        $user->gender = $request->input('gender');
        $user->birth_date = $request->input('birth_date');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $createDate = Carbon::now();
        $user->created_at = date("Y-m-d", strtotime($createDate));
        $user->state = "client";

        // Age
        $age = date("Y-m-d", strtotime($request->input('birth_date')));
        $years = Carbon::parse($age)->age;

        // Verify
        if($years < 18){
            $error = "Certaines conditions ne sont pas respectées (doit être majeur)";
            return Redirect::back()->withErrors($error);
        }
        else{
            $user->save($validatedData);

            Auth::login($user, true);

            return redirect('/');
        }
    }
}
