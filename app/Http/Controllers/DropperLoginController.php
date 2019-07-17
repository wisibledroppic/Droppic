<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Dropper;




class DropperLoginController extends Controller
{

    public function __construct()
    {
        //$this->middleware('guest:dropper');
        $this->middleware('guest:dropper')->except('logDropperOut');
    }

    public function showDroppersLoginForm(){
        //return view ('pages.home')->with('news',$news);
        return view ('droppers.login');
    }

    public function login(Request $request){
        $this->validate($request,[
            'email'=> 'required|email',
            'password'=> 'required|min:8'
        ]);



        $credentials = $request->only('email', 'password');

        // if(Auth::guard('dropper')->attempt(['email'=> $request->email,'password'=>$request->password],$request->remember)){
        if(Auth::guard('dropper')->attempt($credentials)){
            //return redirect('droppers/dashboard');
            // $dropper = Dropper::where('email', $request->email)->first();
            // Auth::guard('dropper')->login($dropper);
            Session::flash('flash_success','You have been Logged in. Welcome back '.Auth::guard('dropper')->user()->dname.'.');
            return redirect()->intended(route('dropper.dashboard')); 
        }
        else{
            return redirect()->back()->withInput($request->only('email','remember'));
        }
    }

    public function logDropperOut(){
        Auth::guard('dropper')->logout();
        Session::flash('flash_info','You have been Logged out.');
        return redirect('droppers/login');
    }
       
}
