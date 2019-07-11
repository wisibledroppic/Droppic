<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class PickerRegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:picker');
    }

    public function showPickersResgistrationForm(){
        //return view ('pages.home')->with('news',$news);
        return view ('pickers.registration');
    }

    public function registerPicker(Request $request){
        //Registration logic
        return true;
    }
}

