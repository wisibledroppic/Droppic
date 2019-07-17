<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Session;
use App\Dropper;

class DropperController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:dropper');
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
        $dropper=Auth::guard('dropper')->user();
        return view('droppers.profile')->with('dropper',$dropper);
    }

    public function editDroppersProfile(Request $request ){
        $validator = Validator::make($request->all(), [
            'dname' => 'required',
            'dcontact' => ['required','min:15'],
            'dcnic' => 'required',
            'hrs_from' => 'required',
            'hrs_to' => 'required',
        ]);


        $dropper=Dropper::find(Auth::guard('dropper')->user()->dropper_id);
        $dropper->dname = $request->get ( 'dname' );
        //$dropper->email = Auth::guard('dropper')->user()->email;
        $dropper->dcnic = $request->get ( 'dcnic' );
        $dropper->dcontact = $request->get ( 'dcontact' );


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->only('email','dname','dcontact','dcnic','hrs_from','hrs_to'));
        }
        $first =(int) (strtok($request->get ( 'hrs_from' ), ':'));
        echo $first;
        $second =(int) (strtok($request->get ( 'hrs_to' ), ':'));
        echo $second;

        if ($first>$second) {
            return redirect()->back()->withErrors($validator)->withInput($request->only('email','dname','dcontact','dcnic','hrs_from','hrs_to'));
        } else {
            if ($first==$second) {
                if (true) {   
                    // $third =(int) (substr($request->get ( 'hrs_from' ), strpos($request->get ( 'hrs_from' ), ":") + 1));
                    // $fourth =(int) (substr($request->get ( 'hrs_to' ), strpos($request->get ( 'hrs_to' ), ":") + 1)); 
                    // echo ($third+ '     '+$fourth); 
                } else {
                   
                }
                
            } else {
                $dropper->hrs_from = $request->get ( 'hrs_from' );
                $dropper->hrs_to = $request->get ( 'hrs_to' );
            }
            
        }
        
        
        
        $dropper->save ();
        Session::flash('flash_success','Hey '.Auth::guard('dropper')->user()->dname.' , Your profile has been updated successfully.');
        return redirect()->intended(route('dropper.showProfile'));
    }

    
}
