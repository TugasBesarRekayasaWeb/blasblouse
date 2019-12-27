<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
    	$product = DB::table('products')->get();
        //dump($product);
        return view('products.product', ['product' => $product]) ;
    }
}
