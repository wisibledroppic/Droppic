<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Dropper;

class RequestController extends Controller
{
    public function showRequestForm(){
        $picker= Auth::guard('picker')->user();
        $droppers = Dropper::all();
        return view('pickers.requestpage')->with('picker',$picker)->with('droppers',$droppers);
    }

    public function addRequest(Request $request){

        echo $request;
    }
}
