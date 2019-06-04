<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdateUser extends Controller
{
    public function display()
    {
        $user = auth()->user();

        return view('updateUser')->with('user', $user);
    }

    public function update(Request $request)
    {
        $user = auth()->user();

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

        // Age
        $age = date("Y-m-d", strtotime($request->input('birth_date')));
        $years = Carbon::parse($age)->age;

        // Verify
        if($years < 18){
            $error = "Certaines conditions ne sont pas respectées (doit être majeur)";
            return Redirect::back()->withErrors($error);
        }
        else{
            $user->save();

            return redirect('/');
        }
    }
}
