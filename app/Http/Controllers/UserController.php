<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
    	$product = DB::table('product')->get();
        //dump($product);
        return view('product.product', ['product' => $product]) ;
    }
}
