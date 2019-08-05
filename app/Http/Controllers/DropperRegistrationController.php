<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Session;

use App\Dropper;

class DropperRegistrationController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest:dropper');
    }


    public function showDroppersResgistrationForm(){
        //return view ('pages.home')->with('news',$news);
        return view ('droppers.registration');
    }

    public function registerDropper(Request $request){
        $validator = Validator::make($request->all(), [
            'dname' => 'required',
            'dcontact' => ['required','min:15'],
            'email' => 'email|required|unique:droppers',
            'dcnic' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->only('email','dname','dcontact','dcnic'));
        }

        $dropper = new Dropper ();
        $dropper->dname = $request->get ( 'dname' );
        $dropper->email = $request->get ( 'email' );
        $dropper->dcnic = $request->get ( 'dcnic' );
        $dropper->dcontact = $request->get ( 'dcontact' );
        $dropper->password = Hash::make ( $request->get ( 'password' ) );
        //$dropper->password =( $request->get ( 'password' ) );
        $dropper->save ();
        Session::flash('flash_success','Welcome to Droppic Your account has been created and now you can login.');
        return redirect()->intended(route('dropper.dashboard'));
    }
}
