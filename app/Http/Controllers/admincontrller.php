<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\info;
use Illuminate\Routing\Route;
use Illuminate\Validation\Validator;

class admincontrller extends Controller
{
    public function admin()
    {
        $info = info::all();
        return view('admin.info', compact('info'));
    }


    public function adminlogin(){

        return view('admin.login');

    }


    public function checkAdminlogin(Request $request){
        $info = info::all();
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admins')->attempt(['email' => $request->email, 'password' => $request->password] )) {

            return view('admin.info', compact('info'));
    
            
    
        }
        return back()->withInput($request->only('email'));

    }


}

