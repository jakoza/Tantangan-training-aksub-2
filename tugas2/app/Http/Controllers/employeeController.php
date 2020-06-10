<?php

namespace App\Http\Controllers;

use App\employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function e_link_input(){
        return view('employeeInput');
    }
    public function store(Request $request){
        employee::create([
            'company_id'=> $request-> company_name,
            'employee_name'=>$request->employee_name,
            'employee_position'=>$request->employee_position,
            'employee_age'=>$request->employee_age,
            'employee_phone_number'=>$request->employee_phone_number

        ]);
    }
}
