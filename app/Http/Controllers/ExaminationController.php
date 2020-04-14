<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Result;
use App\TimeTable;
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

    public function searchstudents(Request $request){
        // $result = DB::table('results')
        // ->join('subjects','subjects.subject_id', '=' , 'results.subject_id')
        // ->join('students','students.student_id' , '=' , 'results.student_id')
        // ->select('students.*','subjects.*','results.*')
        // ->where('results.class_id',$request->class_id)
        // ->get();
        // $result = DB::table('classes')
        // ->join('students','students.student_class_of_admission' , '=' , 'classes.class_id')
        // ->join('subjects','subjects.class_id' , '=' , 'classes.class_id')
        // ->join('results','results.student_id' , '=' , 'students.student_id')
        // ->select('classes.*','students.*','subjects.*','results.*')
        // ->where('classes.class_id',$request->class_id)
        // ->where('students.student_class_section',$request->section)
        // ->get();
        // dd($request->class_id);
        $students = Student::where('student_class_of_admission',$request->class_id)->where('student_class_section',$request->section)->get();
        
       
        // dd($students);
        return view('Examination.announce_result',compact('students'));
    }

    public function makereport($id)
    {
        // dd($id);
        $results = DB::table('students')
        ->join('classes','classes.class_id' , '=' , 'students.student_class_of_admission')
        ->join('results','results.student_id' , '=' , 'students.student_id')
        ->join('subjects','subjects.subject_id' , '=' , 'results.subject_id')
        ->select('students.*','classes.*','results.*','subjects.*')
        ->where('results.student_id',$id)
        ->where('students.student_id',$id)
        ->get();
        
        $marks = $results->sum('marks');
        $obtain_marks = $results->sum('obtain_marks');
        if ($marks != 0) {
            $percent = $obtain_marks / $marks * 100;
            } else {
            $percent = 0;
            }

        // dd($percent);
    //    foreach ($results as $value) {
    //       dd($value[0]->marks);
    //    }
       return view('Examination.student_report',compact('results','marks','obtain_marks','percent'));
    }

    public function updateresult(Request $request){
        
        $data=$request->all();
        // dd($data['id'][0]);
        $count= count($data['id']);
        // dd($count);
        for($i = 0 ; $i < $count ; $i++){
            $result = Result::where('student_id', $data['id'][$i])->get();
            foreach ($result as $results) {
                # code...
                $results->status_report = 1;
                // dd($results);
                $results->save();
            }
            // FeeDetail::create(['student_id' => $data["id"][$i],'due_date' => $data["due_date"] , 'fee_month' => $data["fee_month"] , 'fees_id' => $data["fees_id"], 'current_ammount' => $data["current_ammount"],'arrears' => $data["current_ammount"], 'fee_status' => 0]);
            
        }
        // dd('stop');
        return redirect()->back();
    }

    // public function updatesyllabus(Request $request){

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function timetable(Request $request)
    {
        // dd($request);

        $timetable = DB::table('classes')
        ->join('subjects','subjects.class_id', '=' ,'classes.class_id')
        ->select('classes.*','subjects.*')
        ->where('classes.class_id',$request->class_id)
        ->get();
        
        // ->join('')
        // dd($timetable);
        return view('Examination.timetable_exams',compact('timetable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createtimetable(Request $request)
    {
        // $teacher_id = Auth::user()->id;
        $data = $request->all();
        // dd($data["student_roll_no"]);
        $count = count($data["subject_id"]);
        // $now = Carbon::now();
        // $date =$now->format('Y-m-d');
        // dd($date);
        $att = DB::table('time_tables')
        ->where('date', $request->date[1])->get();
        
        if($att->isEmpty()){
            // dd('asdsad');
            for($i = 1 ; $i <= $count ; $i++){
                $done = TimeTable::create([
                    'subject_id' => $data["subject_id"][$i],
                    'class_id' => $data["class_id"][$i],
                    'yearofexam' => $data["yearofexam"][$i],
                    'exam' => $data["exam"][$i],
                    'date' => $data["date"][$i],
                    'start_time' => $data["start_time"][$i],
                    'end_time' => $data["end_time"][$i]
                    ]);
            }
            toastr()->success('Time Table Created succesfully');
        }
        else{
            // dd('asd');
            toastr()->warning('Timetable already taken');
            // return redirect()->back();
        }
        return redirect()->back();
        
        // dd($request);
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
