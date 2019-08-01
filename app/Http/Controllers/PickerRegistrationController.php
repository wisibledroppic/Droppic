<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\PickerCategory;
use App\Picker;
use Auth;
use Session;

class PickerRegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:picker');
    }

    public function showPickersResgistrationForm(){
        //return view ('pages.home')->with('news',$news);
        $cats = PickerCategory::all();
        return view ('pickers.registration')->with('cats',$cats);
    }

    public function registerPicker(Request $request){
        //Registration logic
        $validator = Validator::make($request->all(), [
            'pname' => 'required',
            'pcontact' => 'required',
            'email' => 'email|required|unique:pickers',
            'pcnic' => 'required',
            'cat' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->only('email','pname','pcontact','pcnic','cat'));
        }

        $picker = new Picker ();
        $picker->pname = $request->get ( 'pname' );
        $picker->email = $request->get ( 'email' );
        $picker->pcnic = $request->get ( 'pcnic' );
        $picker->pcontact = $request->get ( 'pcontact' );
        $picker->picker_category_id = $request->get ( 'cat' );
        $picker->password = Hash::make ( $request->get ( 'password' ) );
        //$dropper->password =( $request->get ( 'password' ) );
        $picker->save ();
        Session::flash('flash_success','Welcome to Droppic .Your account has been created you can login now.');
        return redirect()->intended(route('picker.dashboard'));
        return true;
    }
}

