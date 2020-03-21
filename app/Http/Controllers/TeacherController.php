<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Lectures;
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
