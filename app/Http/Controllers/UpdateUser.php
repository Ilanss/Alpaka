<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdateUser extends Controller
{
    // SHow form modification
    public function form()
    {
        $user = auth()->user();

        return view('users.update')->with('user', $user);
    }

    // Update user
    public function update(Request $request)
    {
        // Validation des input
        $validatedData = $request->validate([
            'username' => 'required|max:20',
            'lastname' => 'required|max:45',
            'firstname' => 'required|max:45',
            'gender' => 'required',
            'birth_date' => 'required|date',
            'email' => 'required|max:45',
            'password' => 'required|max:255'
        ]);

        $user = auth()->user();

        $user->username = $request->input('username');
        $user->lastname = $request->input('lastname');
        $user->firstname = $request->input('firstname');
        $user->gender = $request->input('gender');
        $user->birth_date = date("Y-m-d", strtotime($request->input('birth_date')));
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        // Age
        $age = date("Y-m-d", strtotime($request->input('birth_date')));
        $years = Carbon::parse($age)->age;

        // Verify
        if ($years < 18) {
            $error = "Certaines conditions ne sont pas respectées (doit être majeur)";
            return Redirect::back()->withErrors($error);
        } else {
            $user->save($validatedData);

            return redirect('/');
        }
    }
}
