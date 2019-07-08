<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

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
        $this->middleware('guest');
    }

    
    public function showDroppersResgistrationForm(){
        //return view ('pages.home')->with('news',$news);
        return view ('droppers.registration');
    }

    public function registerDropper(Request $request){
        $validator = Validator::make($request->all(), [
            'dname' => 'required',
            'dcontact' => 'required',
            'email' => 'email|required|unique:droppers',
            'dcnic' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect('droppers/registration')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $dropper = new Dropper ();
        $dropper->dname = $request->get ( 'dname' );
        $dropper->email = $request->get ( 'email' );
        $dropper->dcnic = $request->get ( 'dcnic' );
        $dropper->dcontact = $request->get ( 'dcontact' );
        // $dropper->password = Hash::make ( $request->get ( 'password' ) );
        $dropper->password =( $request->get ( 'password' ) );
        $dropper->save ();
        return redirect ( '/home' );
    }
}
