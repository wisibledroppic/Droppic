<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class RequestController extends Controller
{
    public function showRequestForm(){
        $picker= Auth::guard('picker')->user();
        return view('pickers.requestpage')->with('picker',$picker);
    }

    public function addRequest(Request $request){
        echo $request;
    }
}
