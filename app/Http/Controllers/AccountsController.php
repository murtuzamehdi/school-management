<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fee;
use App\Classes;
use App\Student;
use DB;
use App\FeeDetail;
class AccountsController extends Controller
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

    public function feesindex()
    {
        return view('Accounts.setfees');
    }

    public function addfess(Request $request)
    {
        // dd($request);
        $fee = new Fee();
        $fee->class_id = $request->class_id;
        $fee->annual_charges = $request->annual_charges;
        $fee->lab = $request->lab;
        $fee->tution_fee = $request->tution_fee;
        $fee->year = $request->year;
        $fee->amount = $request->amount;
        $fee->save();
        return redirect('/');
    }

    public function feechallan(){
        $class= Classes::all();
        $student=DB::table('students')
        ->join('classes','classes.class_id','students.student_class_of_admission')
        ->select('classes.*','students.*')
        ->get();
        return view('Accounts.feechallan',compact('class','student'));
    }
    public function bulk(Request $request){
        // dd($request->all());
        // dd($data['id']);
        
        $data=$request->all();
        $count= count($data['id']);
        // dd($count);
        for($i = 0 ; $i < $count ; $i++){

            FeeDetail::create(['student_id' => $data["id"][$i],'due_date' => $data["due_date"] , 'fee_month' => $data["fee_month"] , 'fees_id' => $data["fees_id"], 'current_ammount' => $data["current_ammount"]]);
             
         }
 

        $class= Classes::all();
        $student=DB::table('students')
        ->join('classes','classes.class_id','students.student_class_of_admission')
        ->select('classes.*','students.*')
        ->get();
        return view('Accounts.feechallan',compact('class','student'));
    }

    public function generatechallan(Request $request){
        $class= Classes::all();
        $student=DB::table('students')
        ->join('classes','classes.class_id','students.student_class_of_admission')
        ->select('classes.*','students.*')
        ->where('student_class_of_admission',$request->classes)
        ->get();
        // dd($student);
        $fees=DB::table('fees')
        ->where('class_id',$request->classes)
        ->get();
        // dd($fees,$student);
        return view('Accounts.generatechallan',compact('fees','student','class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewfess()
    {
        // $fees = Fee::all();
        $fees = DB::table('classes')
        ->join('fees','fees.class_id' , '=' , 'classes.class_id')
        ->select('classes.*','fees.*')
        ->get();
        // dd($fees);
        return view('Accounts.view_fees',compact('fees'));
    //    dd('as');
    }


    public function fetchfees($id){
        $fees = DB::table('classes')
        ->join('fees','fees.class_id' , '=' , 'classes.class_id')
        ->select('classes.*','fees.*')
        ->where('fees.fees_id',$id)
        ->get();
        // dd($fees);
        return $fees;
    }

    public function updatefees(Request $request)
    {
        // dd($request->fees_id);
        $fees = Fee::where('fees_id', $request->fees_id)->first();
        // dd($fees);
        if($fees != null){
            $fees->class_id = $request->class_id;
            $fees->annual_charges = $request->annual_charges;
            $fees->lab = $request->lab;
            $fees->tution_fee = $request->tution_fee;
            $fees->year = $request->year;
            $fees->amount = $request->amount;
            $fees->save();
            // dd($fees->class_id);
        }
        return redirect('/');
        // toastr()->success('Record has been Edited!');
        // return response()->json(['message' => ' Record has been Edited!']);
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
