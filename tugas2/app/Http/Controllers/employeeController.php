<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeeController extends Controller
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
}
