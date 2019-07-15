<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PickerCategory;
use Auth;

class PickerLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:picker');
        //$this->middleware('guest:picker')->except('logout');
    }

    public function showPickersLoginForm(){
        //return view ('pages.home')->with('news',$news);
        $cats = PickerCategory::all();
        //echo ($cats);
        // $players= Player::orderBy('ratings','desc')->paginate(15);
        // return view ('players.index')->with(['players' => $players])->with('teams',$teams);
        return view ('pickers.login')->with('cats',$cats);
    }

    public function login(Request $request){
        $this->validate($request,[
            'email'=> 'required|email',
            'password'=> 'required|min:8',
            //'cat' => 'required',
        ]);
        //$credentials = $request->only('email', 'password','picker_category_id');
        $credentials = $request->only('email', 'password');
        if(Auth::guard('picker')->attempt($credentials)){
            //return redirect('droppers/dashboard');
            //$c = PickerCategory::find($request->cat);
            
            //$c = PickerCategory::where('picker_category_id', $request->cat);
            return redirect()->intended(route('picker.dashboard'));
        }
        else{
            return redirect()->back()->withInput($request->only('email','remember'));
        }
    }
}
