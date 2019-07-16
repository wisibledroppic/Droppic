<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dropper;
use App\Picker;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $droppers = Dropper::all();
        $pickers = Picker::all();
        return view('admin.dashboard')->with('droppers',$droppers)->with('pickers',$pickers);
    }
    public function showDroppersProfile(){
        return view('droppers.profile');
    }

    public function editDroppersProfile(){
        return true;
    }

    public function logAdminOut (){
        Auth::guard('web')->logout();
        return redirect('login');
    }
}
