<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropperController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth:dropper');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('droppers.dashboard');
    }
    public function showDroppersProfile(){
        return view('droppers.profile');
    }

    public function editDroppersProfile(){
        return true;
    }
}
