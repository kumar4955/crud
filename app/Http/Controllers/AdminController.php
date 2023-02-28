<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Admin;

class AdminController extends Controller
{
    function login(){
        return view('Backend.login');
    }
    function submitlogin(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'




        ]);
        $userCheck=Admin::where(['username'=>$request->username,'password'=>$request->password])->count();
    	if($userCheck>0){
            $adminData=Admin::where(['username'=>$request->username,'password'=>$request->password])->first();
            session(['adminData'=>$adminData]);
    		return redirect('Admin/Dashboard');
    	}else{
    		return redirect('Admin/login')->with('error','Invalid username/password!!');
    	}

    }

    function dashboard(){
        return view('Backend.Dashboard');
    }
    
}
