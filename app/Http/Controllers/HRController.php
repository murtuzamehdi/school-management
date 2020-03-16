<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Employee;
use App\Parents;
use App\Fee;
use DB;
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
        // dd($request);
        $student = new Student();
        $student->student_name = $request->input('student_name');
        $student->father_name = $request->input('father_name');
        $student->parent_cnic = $request->input('parent_cnic');
        $student->student_email = $request->input('student_email');
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
        $student->student_class_of_admission = $request->input('student_class_of_admission');
        $student->student_class_section = $request->input('student_class_section');
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

    // public function setfees(Request $request)
    // {
    //     // dd($request);
    //     $parent = new Fee();
        
    //     $parent->save();
    //     return redirect('/');
    // }

    public function viewstudent()
    {
        // dd($request);
        $students = Student::all();

        // foreach ($students as $student) {
        //     # code...
        //     // $parent = Parents::where('father_cnic',$student->parent_cnic)->orwhere('mother_cnic',$student->parent_cnic)->get();
        //     // dd($parent);
        // }

        

        

            // Student::all();
        
        return view('HR.view_student',compact('students'));
    }

    public function viewemployee(Request $request)
    {
        $employee = Employee::all();
        // dd($students);
        
        return view('HR.view_employee',compact('employee'));
    }

    public function viewparent(Request $request)
    {
        // dd($request);
        $parent = Parents::all();
        
        return view('HR.view_parent',compact('parent'));
    }
    
    public function fetchstudent($id)
    {
        if(request()->ajax())
        {
            $data = Student::where('id' , $id)
            ->get();
            return $data;
        } 
        
        return view('HR.view_student');
    }

    public function fetchparent($id)
    {
        // dd($id);
        if(request()->ajax())
        {
            $data = Parents::where('id' , $id)
            ->get();
            // dd($data);
            return $data;
        } 
        
        return view('HR.view_student');
    }



    public function fetchemployee($id)
    {
        if(request()->ajax())
        {
            $data = Employee::where('id' , $id)
            ->get();
            return $data;
        } 
        
        return view('HR.view_employee');
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
        $student = Student::where('id',$id)->get();
        return view('HR.edit_student', compact('student'));
    }
   
   
    public function editemployee($id)
    {
        // dd('as');
        $employee = Employee::where('id',$id)->get();
        return view('HR.edit_employee', compact('employee'));
    }

    public function editparent($id){
        // dd($id);
        $parent = Parents::where('id', $id)->get();
        // dd($parent);
        return view('HR.edit_parent',compact('parent'));
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
       $student = Student::where('id', $id)->first();
       if($student != null){
        //    dd($request);
            $student->student_name    = $request->student_name;
            $student->student_roll_no = $request->student_roll_no;
            $student->father_name     = $request->father_name;
            $student->parent_cnic     = $request->parent_cnic;
            $student->student_email   = $request->student_email;
            $student->student_gender  = $request->student_gender;
            $student->student_dob     = $request->student_dob;
            $student->student_blood_group = $request->student_blood_group;
            $student->student_nationality = $request->student_nationality;
            $student->student_religion = $request->student_religion;
            $student->student_address = $request->student_address;
            $student->student_phone_number = $request->student_phone_number;
            $student->student_pic_path = $request->student_pic_path;
            $student->student_date_of_admission = $request->student_date_of_admission;
            $student->student_class_of_admission = $request->student_class_of_admission;
            $student->student_class_section = $request->student_class_section;
            $student->student_previous_school = $request->student_previous_school;
            $student->student_disability = $request->student_disability;
            $student->save();
        //    dd($id);
       }
       return redirect('/');
    }


    public function updateemployee(Request $request, $id)
    {
       $employee = Employee::where('id', $id)->first();
       if($employee != null){
        //    dd($request);
            $employee->employee_name    = $request->employee_name;
            $employee->employee_designation = $request->employee_designation;
            $employee->employee_address     = $request->employee_address;
            $employee->employee_gender     = $request->employee_gender;
            $employee->employee_cnic   = $request->employee_cnic;
            $employee->employee_phone_number  = $request->employee_phone_number;
            $employee->employee_hireDate     = $request->employee_hireDate;
            $employee->employee_dob = $request->employee_dob;
            $employee->dept_id = $request->department;
            $employee->save();
        //    dd($id);
       }
       return redirect('/');
    }

    public function updateparent(Request $request, $id)
    {
       $parent = Parents::where('id', $id)->first();
       if($parent != null){
        //    dd($request);
            $parent->father_name         = $request->father_name;
            $parent->father_email        = $request->father_email;
            $parent->father_phone_number = $request->father_phone_number;
            $parent->father_address      = $request->father_address;
            $parent->father_cnic         = $request->father_cnic;
            $parent->father_occupation   = $request->father_occupation;
            $parent->father_annual_income = $request->father_annual_income;
            $parent->mother_name         = $request->mother_name;
            $parent->mother_email        = $request->mother_email;
            $parent->mother_phone_number = $request->mother_phone_number;
            $parent->mother_address      = $request->mother_address;
            $parent->mother_cnic         = $request->mother_cnic;
            $parent->mother_occupation   = $request->mother_occupation;
            $parent->mother_annual_income = $request->mother_annual_income;
            $parent->save();
        //    dd($id);
       }
       return redirect('/');
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
