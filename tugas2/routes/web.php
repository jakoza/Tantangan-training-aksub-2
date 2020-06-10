<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'companyController@index');

Route::get('/employee_input', 'employeeController@e_link_input');

Route::get('/welcome','companyController@index');

Route::get('/company_input', 'companyController@c_link_input');

Route::get('/create/company', 'companyemployeeController@create')->name('create_company');

Route::post('/company', 'companyController@store')->name('company.store');

Route::post('/employee', 'employeeController@store')->name('employee.store');   


