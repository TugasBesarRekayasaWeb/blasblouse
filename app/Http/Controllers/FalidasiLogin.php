<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login;
use Auth;

class FalidasiLogin extends Controller
{
    public function login(){
    	return view('login');
    } 

    public function postlogin(Request $request){
    	$id=1;
    	if (Auth::attempt(['id'=>$id,'email'=> $request->email,'password'=>$request->password])) {
    		return redirect('/admin');
    	}else if (Auth::attempt(['email'=> $request->email,'password'=>$request->password])) {
    		return redirect('/user');
    	}
    	return redirect('/login');
    }
}
