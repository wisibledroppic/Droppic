<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;
use Session;
use App\Imports\BankCsvImport;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class BankCsv extends Controller
{
    public function index(){
        $banks=Bank::all();
        return view('admin.showBanks')->with('banks',$banks);
    }
    public function bankCsvImport(){
        

        Excel::import(new BankCsvImport,request()->file('file'));
        $banks=Bank::all();
        Session::flash('flash_success','Banks Added Succesfully in Droppic Database.');
        return view('admin.showBanks')->with('banks',$banks);
        
    }
}
