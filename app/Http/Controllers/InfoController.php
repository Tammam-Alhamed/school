<?php

namespace App\Http\Controllers;

use App\Models\info;
use Illuminate\Http\Request;

class InfoController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = info::all();
        return view('admin.info', compact('info'));
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
     * @param  \App\Models\info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(info $info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, info $info)
    {
        $request->validate([
            'name'=>'required',
            'maneger'=>'required',
            'location'=>'required'

        ]);
        
        $info->update($request->all());
        return redirect()->route('info.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(info $info)
    {
        //
    }

    public function about()
    {
        $info = info::all();
        return view('about', compact('info'));
    }

    public function dashbord()
    {
        $info = info::all();
        return view('about', compact('info'));
    }
}
