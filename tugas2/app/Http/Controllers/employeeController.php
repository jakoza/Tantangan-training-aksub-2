<?php

namespace App\Http\Controllers;

use App\employee;
use App\company;    
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function index(){
        $employees = employee::all();
        return view('welcome', compact('employees'));
    }
    public function link(){
        $companies = company::all();
        return view('/employeeInput', compact('companies'));
    }

    public function store(Request $request){
        employee::create([
            'employee_name'=>$request->employee_name,
            'employee_position'=>$request->employee_position,
            'employee_age'=>$request->employee_age,
            'employee_phone_number'=>$request->employee_phone_number,
            'company_id'=>$request->company_id
        ]);
        return back();
    }
}
