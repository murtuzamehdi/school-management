<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Employee;
use App\Parents;
class HRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('HR.register_student');
    }

    public function employeeindex()
    {
        return view('HR.register_employee');
    }
   
    public function parentindex()
    {
        return view('HR.register_parent');
    }

    public function feesindex()
    {
        return view('HR.setfees');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addstudent(Request $request)
    {
        // dd('as');
        $student = new Student();
        $student->student_name = $request->input('student_name');
        $student->student_roll_no = $request->input('student_roll_no');
        $student->student_gender = $request->input('student_gender');
        $student->student_dob = $request->input('student_dob');
        $student->student_blood_group = $request->input('student_blood_group');
        $student->student_nationality = $request->input('student_nationality');
        $student->student_religion = $request->input('student_religion');
        $student->student_address = $request->input('student_address');
        $student->student_phone_number = $request->input('student_phone_number');
        $student->student_pic_path = $request->input('student_pic_path');
        $student->student_date_of_admission = $request->input('student_date_of_admission');
        $student->student_previous_school = $request->input('student_previous_school');
        $student->student_disability = $request->input('student_disability');
        $student->save();
        return redirect('/');
    }


    public function addemployee(Request $request)
    {
        // dd($request);
        $employee = new Employee();
        $employee->employee_name = $request->input('employee_name');
        $employee->employee_designation = $request->input('employee_designation');
        $employee->employee_address = $request->input('employee_address');
        $employee->employee_gender = $request->input('employee_gender');
        $employee->employee_cnic = $request->input('employee_cnic');
        $employee->employee_phone_number = $request->input('employee_phone_number');
        $employee->employee_hireDate = $request->input('employee_hireDate');
        $employee->employee_dob = $request->input('employee_dob');
        $employee->dept_id = $request->input('department');
        $employee->save();
        return redirect('/');
    }

    public function addparent(Request $request)
    {
        // dd($request);
        $parent = new Parents();
        $parent->father_name = $request->input('father_name');
        $parent->father_email = $request->input('father_email');
        $parent->father_phone_number = $request->input('father_phone_number');
        $parent->father_address = $request->input('father_address');
        $parent->father_cnic = $request->input('father_cnic');
        $parent->father_occupation = $request->input('father_occupation');
        $parent->father_annual_income = $request->input('father_annual_income');
        $parent->mother_name = $request->input('mother_name');
        $parent->mother_email = $request->input('mother_email');
        $parent->mother_phone_number = $request->input('mother_phone_number');
        $parent->mother_address = $request->input('mother_address');
        $parent->mother_occupation = $request->input('mother_occupation');
        $parent->mother_annual_income = $request->input('mother_annual_income');
        $parent->save();
        return redirect('/');
    }
    public function setfees(Request $request)
    {
        // dd($request);
        $parent = new Parents();
        $parent->father_name = $request->input('father_name');
        $parent->father_email = $request->input('father_email');
        $parent->father_phone_number = $request->input('father_phone_number');
        $parent->father_address = $request->input('father_address');
        $parent->father_cnic = $request->input('father_cnic');
        $parent->father_occupation = $request->input('father_occupation');
        $parent->father_annual_income = $request->input('father_annual_income');
        $parent->mother_name = $request->input('mother_name');
        $parent->mother_email = $request->input('mother_email');
        $parent->mother_phone_number = $request->input('mother_phone_number');
        $parent->mother_address = $request->input('mother_address');
        $parent->mother_occupation = $request->input('mother_occupation');
        $parent->mother_annual_income = $request->input('mother_annual_income');
        $parent->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
