<?php

namespace App\Http\Controllers;

use App\Newarrival;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class NewarrivalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = today();
        $newarrival = DB::table('product')->where('created_at', '', today())->get();
        //dd($newarrival);
        return view('/newarrivals/newarrival', ['newarrival' => $newarrival]);
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
     * @param  \App\Newarrival  $newarrival
     * @return \Illuminate\Http\Response
     */
    public function show(Newarrival $newarrival)
    {
        return view('newarrivals.show', compact('newarrival'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newarrival  $newarrival
     * @return \Illuminate\Http\Response
     */
    public function edit(Newarrival $newarrival)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newarrival  $newarrival
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newarrival $newarrival)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newarrival  $newarrival
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newarrival $newarrival)
    {
        //
    }
}
