<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Subject;
use App\Section;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $classes = DB::table('classes')
      ->join('subjects','subjects.id','=','classes.subject_id')
      ->select('classes.*','subjects.*')
      ->get();
    //   foreach($classes as $class){
    //   dd($class->class_name);
    //   }
       return view('Classes.add_classes', compact('classes'));
    }
    
    public function subjectindex()
    {
        // dd('as');
      $subject = Subject::all();
    //   foreach($classes as $class){
    //   dd($class->class_name);
    //   }
       return view('Classes.add_subject', compact('subject'));
    }
   
    public function sectionindex()
    {
        // dd('as');
      $section = Section::all();
    //   foreach($classes as $class){
    //   dd($class->class_name);
    //   }
       return view('Classes.add_section', compact('section'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('as');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createsubjects(Request $request){
        // dd($request);
        $create = new Subject();
        $create->subject_name = $request->subject_name;
        $create->save();
        
        $subject = Subject::all();
    //   foreach($classes as $class){
    //   dd($class->class_name);
    //   }
       return view('Classes.add_subject', compact('subject'));

    }

    public function store(Request $request)
    {
        // $student = new Student();
        // $student->student_name = $request->input('student_name');
        // $student->student_roll_no = $request->input('student_roll_no');
        // $student->student_gender = $request->input('student_gender');
        // $student->student_dob = $request->input('student_dob');
        // $student->student_blood_group = $request->input('student_blood_group');
        // $student->student_nationality = $request->input('student_nationality');
        // $student->student_religion = $request->input('student_religion');
        // $student->student_address = $request->input('student_address');
        // $student->student_phone_number = $request->input('student_phone_number');
        // $student->student_pic_path = $request->input('student_pic_path');
        // $student->student_date_of_admission = $request->input('student_date_of_admission');
        // $student->student_previous_school = $request->input('student_previous_school');
        // $student->student_disability = $request->input('student_disability');
        // $student->save();
        // return redirect('/');
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
