<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function userRegister(Request $request)
    {
        $customErrorMessages = [
            'username.required' => 'Username is required!',
            'username.min' => 'Username must be at least 3 characters!',
            'username.max' => 'Username must be at most 20 characters!',
            'username.unique' => 'Username already exists!',
            'email.required' => 'Email is required!',
            'password.required' => 'Password is required!',
            'confirmPassword.required' => 'Confirm Password is required!',
            'email.unique' => 'Email already exists!',
            'confirmPassword.same' => 'Confirm Password must be same as Password!',
        ];


        $request->validate([
            'username' => 'required|min:3|max:20|unique:user',
            'email' => 'required|email|unique:user',
            'password' => 'required|min:8|max:20',
            'confirmPassword' => 'required|same:password',
        ],
        $customErrorMessages);

        //hash password
        $hashPassword = bcrypt($request->password);

        //insert data into database
        $newuser = DB::table('user')->insert([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $hashPassword,
        ]);

        if ($newuser) {
            return back()->with('success', 'Successfully registered!');
        } else {
            return back()->with('fail', 'Something went wrong!');
        }

    }

}