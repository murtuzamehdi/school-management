<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\StudentAttendance;
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
    public function markattendance()
    {
        $id = Auth::user()->id;
        $students = DB::table('subject_teachers')
        ->join('subjects','subjects.subject_id', '=' ,'subject_teachers.subject_id')
        ->join('students','students.student_class_of_admission', '=' ,'subjects.class_id')
        ->join('employees','employees.employee_id', '=' ,'subject_teachers.teacher_id')
        ->join('classes','classes.class_id', '=' , 'subjects.class_id')
        ->select('subject_teachers.*','subjects.*','students.*','employees.*','classes.*')
        ->where('employees.user_id',$id)
        ->get();
        // dd($students);
        return view('Teachers.mark_attendance',compact('students'));
    }


    public function saveattendance(Request $request)
    {
        $teacher_id = Auth::user()->id;
        $data = $request->all();
        // dd($data["student_roll_no"]);
        $count = count($data["student_id"]);
        $now = Carbon::now();
        $date =$now->format('Y-m-d');
        // dd($date);
        $att = DB::table('student_attendances')
        ->where('student_id',  $request->student_id[1]) 
        // ->where('dept_id',  $request->dept_id[1])
        ->where('date',  $date)->get();
        
        if($att->isEmpty()){
            // dd('asdsad');
            for($i = 1 ; $i <= $count ; $i++){
                $date = $now->toDateString();
                $done = StudentAttendance::create(['student_id' => $data["student_id"][$i], 'status' => $data["status"][$i],'date' => $date, 'class_id' => $data["class_id"][$i], 'roll_no' => $data["student_roll_no"][$i],'teacher_id' => $teacher_id ]);
            }
            toastr()->success('Attendance marked succesfully');
        }
        else{
            // dd('asd');
            toastr()->warning('Attendance already taken');
            // return redirect()->back();
        }
        return redirect()->back();
        
        // return view('Teachers.mark_attendance');
    }
    
    public function show()
        {
            $teacher_id = Auth::user()->id;
            
            $data = DB::table('student_attendances')
            ->where('teacher_id' , $teacher_id)
            ->distinct()->get(['date', 'class_id']);
            return view('Teachers.view_attendance', compact('data'));
        }
        
    public function edit(Request $request)
        {
            
            $students = DB::table('student_attendances')
            ->join('classes','classes.class_id', '=' , 'student_attendances.class_id')
            ->join('students','students.student_id', '=' , 'student_attendances.student_id')
            ->select('student_attendances.*','classes.*','students.*')
            ->where('student_attendances.date',$request->date)
            ->where('student_attendances.class_id',$request->class_id)
            ->get();
            // dd($students);

            // $records = StudentAttendance::select('*')
            // ->where('date',$request->date)
            // ->where('class_id',$request->class_id)
            // // ->where('dept_id',$request->dept_id)
            // ->orderBy('date' , 'asc')
            // ->get();
            
            // foreach($records as $s){
                //     $students = DB::table('students')
                //     ->where('student_id',$s->student_id)
                //     ->get();
                // }
                // dd($students);
                return view('Teachers.edit_attendance', compact('students'));
        }

        
        public function update(Request $request)
        {
            $data = $request->all();
            // dd($data['agent_name']);
            $count = count($data["student_id"]);
            $now = Carbon::now();
            for($i = 1 ; $i <= $count ; $i++){
                $date = $now->toDateString();
                $attendee = StudentAttendance::all()->where('student_id' , $data['student_id'][$i])->first();
                $attendee->status = $data['status'][$i];
                // $attendee->comments = $data['comments'][$i];
                $attendee->save();
            }
        
        return redirect('/');
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

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
