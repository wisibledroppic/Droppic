<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;




class DropperLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:dropper');
    }

    public function showDroppersLoginForm(){
        //return view ('pages.home')->with('news',$news);
        return view ('droppers.login-dummy');
    }

    public function login(Request $request){
        $this->validate($request,[
            'email'=> 'required|email',
            'password'=> 'required|min:8'
        ]);

        if(Auth::guard('dropper')->attempt(['email'=> $request->email,'password'=>$request->password],$request->remember)){
            //return redirect('droppers/dashboard');
            return redirect()->intended(route('dropper.dashboard'));
        }
        else{
            return redirect()->back()->withInput($request->only('email','remember'));
        }
    }
       
}
