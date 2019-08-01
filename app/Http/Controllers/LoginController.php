<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('Login/Login');
    }

    public function login(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');

        if(Auth::attempt(['username'=>$username, 'password'=>$password])){
            return redirect('/');
        }
        return back()->with('error','Invalid credentials');
    }
}
