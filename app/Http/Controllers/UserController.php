<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
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
            'allow.required' => 'Please agree to our terms and conditions!',
        ];


        $request->validate([
            'username' => 'required|min:3|max:20|unique:user',
            'email' => 'required|email|unique:user',
            'password' => 'required|min:8|max:20',
            'confirmPassword' => 'required|same:password',
            'allow' => 'required',
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

    public function userLogin(Request $request){

        $customErrorMessages = [
            'email.required' => 'Email is required!',
            'password.required' => 'Password is required!',
        ];

        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8|max:20',
        ],
        $customErrorMessages);

        $emailOrUsername = $request->input('email'); // Assuming you have 'email' field in the form

        $user = null;
        if (filter_var($emailOrUsername, FILTER_VALIDATE_EMAIL)) {
            // It's an email
            $user = DB::table('user')->where('email', $emailOrUsername)->first();

            if(!$user){
                return back()->with('error', 'Invalid email!')->withInput();
            }
        } else {
            // It's a username
            $user = DB::table('user')->where('username', $emailOrUsername)->first();

            if(!$user){
                return back()->with('error', 'Invalid username!')->withInput();
            }
        }

        //check password
        if($user){
            if(password_verify($request->password, $user->password)){
                $request->session()->put('LoggedUser', $user->id);
                return redirect('/dashboard');
            }else{
                return back()->with('error', 'Invalid password!')->withInput();
            }
        }

    }

    public function userlogout() {
        //clear session
        session()->flush();

        return redirect('/');
    }
}