<?php

namespace App\Http\Controllers;

use App\Models\activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activity = activity::all();
        return view ('admin.activity',compact('activity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create.activity');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'slug' => 'required',
            'photo' => 'required|image',
        ]);

             //  $imageName = time().'.'.$request->photo->extension();  
     //  $request->photo->move('upload', $imageName);
        
        $photo = $request->photo;
        $newphoto = time().'.'.$photo->getClientOriginalExtension();
        $photo->move('uploads/image',$newphoto);
        $activity = activity::create([    
            'photo'=>'uploads/image/'.$newphoto,
            'slug'=> $request->slug ,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = activity::find($id);
        return view('admin.edit.activity',compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $activity = activity::find($id);
        $this->validate($request,[
            'slug' => 'required',
            'photo' => 'required|image',
        ]);

        if ($request->has('photo')) {
            $photo = $request->photo;
            $newphoto = time().'.'.$photo->getClientOriginalExtension();
            $photo->move('uploads/image',$newphoto);
            $activity->photo= 'uploads/image/'.$newphoto;
        }

        $activity->slug = $request->slug ;
       
        $activity->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(activity $activity )
    {

        $activity->delete();
        return redirect()->route('activity.index');
    }
}
