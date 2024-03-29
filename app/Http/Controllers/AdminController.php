<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dropper;
use App\Picker;
use App\PricingPlan;
use Auth;
use Session;

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

    public function showDroppers()
    {
        $droppers = Dropper::all();
        return view('admin.showDroppers')->with('droppers',$droppers);
    }


    public function showPickers()
    {
        $pickers = Picker::all();
        return view('admin.showPickers')->with('pickers',$pickers);
    }

    public function pricingPlans(){
        $pricingplans = PricingPlan::all();
        return view('admin.pricing-plans')->with('pricingplans',$pricingplans);
    }

    public function logAdminOut (){
        Auth::guard('web')->logout();
        return redirect('login');
    }
    public function createPricingPlan(Request $request){
        
        $pricingplan = new PricingPlan ();
        $pricingplan->cat_name = $request->get ( 'name' );
        $pricingplan->amount_per_month= $request->get ( 'amount' );
        $pricingplan->save ();
        Session::flash('flash_success','New pricing Plan Added');
        return redirect()->intended(route('admin.pricingPlans'));
    }
}
