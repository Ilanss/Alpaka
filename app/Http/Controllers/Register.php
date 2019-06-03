<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    public function store(Request $request)
    {
        //print_r($request->input());

        $user = new User();

        $user->username = request('username');
        $user->lastname = request('lastname');
        $user->firstname = request('firstname');
        $user->gender = request('gender');
        $user->birth_date = date("Y-m-d", strtotime(request('birth_date')));
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $createDate = Carbon::now();
        $user->created_at = date("Y-m-d", strtotime($createDate));
        $user->state = "client";

        $user->save();

        Auth::login($user, true);

        return redirect('/');
    }
}
