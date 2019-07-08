<?php

namespace App\Http\Controllers;





class DropperLoginController extends Controller
{
    public function showDroppersLoginForm(){
        //return view ('pages.home')->with('news',$news);
        return view ('droppers.login');
    }
       
}
