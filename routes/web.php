<?php

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

Route::get('/', function () {
    return view('index');
});
//=================== HR ======================== 
// Route::resource('/student', 'StudentController');
Route::any('/student', 'HRController@index');
Route::any('/employee', 'HRController@employeeindex');
Route::any('/parents', 'HRController@parentindex');
Route::any('/setfees', 'HRController@feesindex');
Route::any('/addstudent', 'HRController@addstudent');
Route::any('/addemployee', 'HRController@addemployee');
Route::any('/addparent', 'HRController@addparent');
Route::any('/addfees', 'HRController@addfess');