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
Route::any('/student', 'HRController@index');
Route::any('/employee', 'HRController@employeeindex');
Route::any('/parents', 'HRController@parentindex');
Route::any('/addstudent', 'HRController@addstudent');
Route::any('/addemployee', 'HRController@addemployee');
Route::any('/addparent', 'HRController@addparent');


Route::any('student/fetchdata/{id}', 'HRController@fetchstudent');
Route::any('student/{id}/edit', 'HRController@edit');
Route::any('student/{id}', 'HRController@update');


Route::any('employee/fetchdata/{id}', 'HRController@fetchemployee');
Route::any('employee/{id}/edit', 'HRController@editemployee');
Route::any('employee/{id}', 'HRController@updateemployee');


Route::any('parent/fetchdata/{id}', 'HRController@fetchparent');
Route::any('parent/{id}/editparent' , 'HRController@editparent');
Route::any('parent/{id}', 'HRController@updateparent');


Route::any('/viewstudents', 'HRController@viewstudent');
Route::any('/viewemployee', 'HRController@viewemployee');
Route::any('/parentinfo', 'HRController@viewparent');
// Route::any('/viewemployee', 'HRController@viewemployee');

// Route::resource('/student', 'HRController');

Route::any('/setfees', 'AccountsController@feesindex');
Route::any('/addfees', 'AccountsController@addfess');
Route::any('/viewfees', 'AccountsController@viewfess');
Route::any('fees/fetchdata/{fees_id}', 'AccountsController@fetchfees');
Route::any('/fees', 'AccountsController@updatefees');
Route::any('/feechallan', 'AccountsController@feechallan');
Route::any('/generatechallan', 'AccountsController@generatechallan');
Route::any('/generatechallan/bulk', 'AccountsController@bulk');

Route::resource('/class','StudentController');
Route::any('/createclass','StudentController@createclass');
Route::any('classes/fetchdata/{id}', 'StudentController@fetchclasses');
Route::any('/updateclass', 'StudentController@updateclass');

// ====================== Subject ========================
Route::any('/subjects','StudentController@subjectindex');
Route::any('/createsubjects','StudentController@createsubjects');
Route::any('subject/fetchdata/{id}', 'StudentController@fetchsubject');
Route::any('/updatesubject', 'StudentController@updatesubject');

// ===================== Section ===========================
// Route::any('/createsection','StudentController@createsection');
// Route::any('/section','StudentController@sectionindex');
// Route::any('section/fetchdata/{id}', 'StudentController@fetchsection');
// Route::any('/updatesection', 'StudentController@updatesection');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
