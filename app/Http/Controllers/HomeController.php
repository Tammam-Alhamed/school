<?php

namespace App\Http\Controllers;
use App\Models\activity;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $activity = activity::all();
        return view('home' ,compact('activity'));
    }
}
