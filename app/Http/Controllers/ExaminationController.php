<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ExaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function announceresult()
    {
        return view('Examination.announce_result');
    }

    public function searchresult(Request $request){
        // $result = DB::table('results')
        // ->join('subjects','subjects.subject_id', '=' , 'results.subject_id')
        // ->join('students','students.student_id' , '=' , 'results.student_id')
        // ->select('students.*','subjects.*','results.*')
        // ->where('results.class_id',$request->class_id)
        // ->get();
        $result = DB::table('classes')
        ->join('students','students.student_class_of_admission' , '=' , 'classes.class_id')
        ->join('subjects','subjects.class_id' , '=' , 'classes.class_id')
        ->join('results','results.student_id' , '=' , 'students.student_id')
        ->select('classes.*','students.*','subjects.*','results.*')
        ->where('classes.class_id',$request->class_id)
        ->where('students.student_class_section',$request->section)
        ->get();
        
       
        dd($result);
        return view('Examination.announce_result',compact('result'));
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
    public function store(Request $request)
    {
        //
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
