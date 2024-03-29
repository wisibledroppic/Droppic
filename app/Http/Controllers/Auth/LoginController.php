<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logAdminOut');
    }

    public function logAdminOut (){
        Auth::guard('web')->logout();
        return redirect('login');
    }
    public function show(){
        return view('login');
    }

    public function signin(Request $request){
        $this->validate($request,[
            'email'=> 'required|email',
            'password'=> 'required'
        ]);



        $credentials = $request->only('email', 'password');

            if(Auth::guard('dropper')->attempt($credentials)){
                //return redirect('droppers/dashboard');
                // $dropper = Dropper::where('email', $request->email)->first();
                // Auth::guard('dropper')->login($dropper);
                Session::flash('flash_success','You have been Logged in. Welcome back '.Auth::guard('dropper')->user()->dname.'.');
                return redirect()->intended(route('dropper.dashboard'));
            }
            else{
                if(Auth::guard('picker')->attempt($credentials)){
                    //return redirect('droppers/dashboard');
                    // $dropper = Dropper::where('email', $request->email)->first();
                    // Auth::guard('dropper')->login($dropper);
                    Session::flash('flash_success','You have been Logged in. Welcome back '.Auth::guard('picker')->user()->pname.'.');
                    return redirect()->intended(route('picker.dashboard'));
                }
                else{
                    return redirect()->back()->withInput($request->only('email','remember'));
                }
            }
    }


}
