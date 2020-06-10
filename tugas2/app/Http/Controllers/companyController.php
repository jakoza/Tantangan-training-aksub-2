<?php

namespace App\Http\Controllers;

use App\company;
use Illuminate\Http\Request;

class companyController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function e_link_input(){
        return view('employeeInput');
    }
    public function c_link_input(){
        return view('companyInput');
    } 
    public function store(Request $request){
        company::create([
            'company_name' => $request->company_name, 
            'company_address'=> $request->company_address,
            'company_founder'=> $request->company_founder,
            'company_age'=> $request->company_age
        ]);
        return back();
    }
}
