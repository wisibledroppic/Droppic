<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function show()
    {
        return view('Login/registration');
    }

    public function saveCredentials(Request $request){
        $rules = [
            'username' => 'required|unique:users',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirmpass' => 'required|same:password',
            'contact' => 'required',
            'cnic' => 'required',
            'role' => 'required',
        ];
        $this->validate($request,$rules);
        $userData = new User;
        $userData->username = $request->input('username');
        $userData->email = $request->input('email');
        $userData->password = bcrypt($request->input('password'));
        $userData->contact = $request->input('contact');
        $userData->cnic = $request->input('cnic');
        $userData->role = $request->input('role');
        $userData->category = $request->input('category');
        $userData->status = 'active';
        $userData->save();
        return redirect('/dashboard')->with('error','error occorred');
    }
}
