<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PickerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:picker');
    }

    public function index()
    {
        return view('pickers.dashboard');
    }
    public function showPickersProfile(){
        return view('pickers.profile');
    }

    public function editPickersProfile(){
        return true;
    }
}
