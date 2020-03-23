<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Lectures;
use App\Homework;
use App\Result;
use DB;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


    public function markresult()
    {
      $result = DB::table('students')
      ->join('classes','classes.class_id', '=' , 'students.student_class_of_admission')
      ->join('subjects','subjects.class_id', '=' , 'students.student_class_of_admission')
      ->join('subject_teachers','subject_teachers.subject_id', '=' , 'subjects.subject_id')
      ->select('students.*','classes.*','subjects.*','subject_teachers.*')
      ->get();
        
      return view('Teachers.mark_result',compact('result'));
    }

    public function createmarks(Request $request){
        // dd($request);
        $results = new Result();
        $results->subject_id = $request->subject_id;
        $results->year = $request->year;
        $results->student_id = $request->student_id;
        $results->marks = $request->marks;
        $results->save();

       return $this->markresult();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $id = Auth::user()->id;
        $lectures = new Lectures();
        $lectures->subject_id = $request->input('subject_id');
        $lectures->user_id = $id;
        $lectures->lecture_name = $request->input('lecture_name');

        if($request->hasfile('lecture')){
            $file = $request->file('lecture');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time() . '.' . $extension;
            $file->move('uploads/lectures/' , $filename);
            $lectures->lecture = $filename;
        }else {
            $lectures->lecture = '';
        }
        $lectures->save();
        // dd('as');
        return redirect()->back();
    }

    public function view_lecture(){

        $id = Auth::user()->id;
        $lectures = Lectures::where('user_id',$id)->get();

        return view('Teachers.view_lectures',compact('lectures'));
    }

    public function createhomework(Request $request)
    {
        // dd($request);
        $id = Auth::user()->id;
        $homework = new Homework();
        $homework->subject_id = $request->input('subject_id');
        $homework->user_id = $id;
        $homework->homework = $request->input('homework');
        $homework->description = $request->input('description');
        $homework->start_date = $request->input('start_date');
        $homework->end_date = $request->input('end_date');

        if($request->hasfile('file_path')){
            $file = $request->file('file_path');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time() . '.' . $extension;
            $file->move('uploads/homework/' , $filename);
            $homework->file_path = $filename;
        }else {
            $homework->file_path = '';
        }
        $homework->save();
        // dd('as');
        return redirect()->back();
    }

    
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
