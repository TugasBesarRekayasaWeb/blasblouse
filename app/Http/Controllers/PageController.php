<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
     public function home() {
        return view('index');
    }

    public function newarrival() {
        return view('/newarrival/newarrival');
    }

    public function bestseller(){
        return view('/bestseller/bestseller');
    }

    public function sale(){
        return view('/sale/sale');
    }





    public function register(){
        return view('register');
    }

    




}
