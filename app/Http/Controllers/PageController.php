<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function popular(){
        $popular = DB::table('popular')->get();
        return view('index', ['popular' => $popular]) ;
    }
     public function home() {
        return view('index');
    }

    public function sale(){
        return view('/sale/sale');
    }



    public function register(){
        return view('register');
    }

    




}
