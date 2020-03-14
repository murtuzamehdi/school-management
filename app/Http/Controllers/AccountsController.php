<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fee;
use DB;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewfess()
    {
        // $fees = Fee::all();
        $fees = DB::table('classes')
        ->join('fees','fees.class_id' , '=' , 'classes.id')
        ->select('classes.*','fees.*')
        ->get();
        // dd($fees);
        return view('Accounts.view_fees',compact('fees'));
    //    dd('as');
    }


    public function fetchfees($id){
        $fees = DB::table('classes')
        ->join('fees','fees.class_id' , '=' , 'classes.id')
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
