<?php

namespace App\Http\Controllers;

use App\Models\subject;
use App\Models\classes;
use App\Models\classes_subject;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( classes  $name)
    {

        $subject=subject::all();
        return view('admin.subject',compact('subject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(classes $classes)
    {
        $classes=classes::all();
        return view('admin.create.subject',compact('classes'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject'=>'required',
            'date'=>'required|date',
            'time'=>'required',
            'class_id'=>"required",


        ]);

        $subject = subject::create([
            'subject' => $request->subject,
            'date' => $request->date,
            'time' => $request->time,
            'class_id'=> $request->class_id,
            
        ]);
       // $subject->classes()->attach($request->class_id);
       // DB::insert('insert into classes_subjects (subject_id, class_id) values (? , ?)', [$subject->id, $request->class_id]);
        return redirect()->route('subjectt.index');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(subject $subject , classes $classes , $id)
    {
        $classes=classes::all();
        $subject=subject::find($id);
        return view('admin.edit.subject', compact('subject' , 'classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subject $subject , $id)
    {
        $this->validate($request,[
            'subject'=>'required',
            'date'=>'required|date',
            'time'=>'required',
            'class_id'=>"required"

        ]);
        $subject = subject::find($id);
        $subject->update ([

            'subject'=> $request->subject,
            'date'=> $request->date,
            'time'=> $request->time,
            'class_id'=> $request->class_id

        ]);
        $subject->save();
        return redirect()->route('subjectt.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(subject $subject , $id)
    {
        $subject = subject::find($id);
        $subject->delete();
        return redirect()->route('subject.admin');
    }



    public function class($id)
    {
        $subject = subject::where('class_id', $id)->get();  

        if ($subject != null)
        
            return view('admin.subject',compact('subject'));

        $subject=subject::all();
        return view('admin.subject',compact('subject'));

      
  }


      /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function subject()
    {

        $subject=subject::all();
        return view('subject',compact('subject'));
    }


    
    public function class_user($id)
    {
        $subject = subject::where('class_id', $id)->get();  

        if ($subject != null)
        
            return view('subject',compact('subject'));

        $subject=subject::all();
        return view('subject',compact('subject'));
      
  }



}
