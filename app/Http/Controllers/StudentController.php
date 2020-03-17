<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Subject;
use App\Section;
use App\Classes;
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
      $classes = Classes::all();
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

    public function fetchsubject($id){
        

        if(request()->ajax())
        {
            $data = Subject::where('subject_id',$id)
            ->get();
            return $data;
        } 
        // dd($subject);

        return view('Classes.add_subject');

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
        $create->class_id = $request->class_id;

        $create->save();
        
        $subject = DB::table('subjects')
        ->join('classes','classes.class_id','subjects.class_id')
        ->select('subjects.*','classes.*')
        ->get();
    //   foreach($classes as $class){
    //   dd($class->class_name);
    //   }
       return view('Classes.add_subject', compact('subject'));

    }

    public function updatesubject(Request $request){
        $update = Subject::where('subject_id',$request->subject_id)->first();
        if($update != null){
            $update->subject_name = $request->subject_name;
            $update->save();
        }
        $subject = Subject::all();
        //   foreach($classes as $class){
        //   dd($class->class_name);
        //   }
           return view('Classes.add_subject', compact('subject'));
    }

    // public function createsection(Request $request){
    //     // dd($request);
    //     $create = new Section();
    //     $create->section_name = $request->section_name;
    //     $create->save();
        
    //     $section = Section::all();
    // //   foreach($classes as $class){
    // //   dd($class->class_name);
    // //   }
    //    return view('Classes.add_section', compact('section'));

    // }

    // public function fetchsection($id){
        

    //     if(request()->ajax())
    //     {
    //         $data = Section::where('section_id',$id)
    //         ->get();
    //         return $data;
    //     } 
    //     // dd($subject);

    //     return view('Classes.add_section');

    // }

    // public function updatesection(Request $request){
    //     $update = Section::where('section_id',$request->section_id)->first();
    //     if($update != null){
    //         $update->section_name = $request->section_name;
    //         $update->save();
    //     }
    //     $section = Section::all();
    //     //   foreach($classes as $class){
    //     //   dd($class->class_name);
    //     //   }
    //        return view('Classes.add_section', compact('section'));
    // }

    public function store(Request $request)
    {
      
    }

    public function createclass(Request $request){
        // dd($request);
        $create = new Classes();
        $create->class_name = $request->class_name;
        $create->section = $request->section;
        $create->save();
        
        $classes = Classes::all();
    //    return $this->index();
       return view('Classes.add_classes', compact('classes'));
    }

    public function fetchclasses($id){
        // dd($id);
        if(request()->ajax())
        {
            $data = Classes::where('class_id',$id)
            ->get();
            return $data;
        } 
        // dd($subject);

        return view('Classes.add_classes');

    }

    public function updateclass(Request $request){
        // dd($request);
        $update = Classes::where('class_id',$request->class_id)->first();
        // dd($update);
        if($update != null){
            // $update->class_id = $request->class_id;
            $update->class_name = $request->class_name;
            $update->subject_id = $request->subject_id;
            $update->save();
        }
        // dd('as');
        $classes = DB::table('classes')
        ->join('subjects','subjects.subject_id','=','classes.subject_id')
        ->select('classes.*','subjects.*')
        ->get();
           return view('Classes.add_section', compact('classes'));
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
