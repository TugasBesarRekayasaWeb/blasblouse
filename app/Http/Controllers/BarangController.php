<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        return view('Barang1.index', compact('barang'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Barang1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    
       

        $barang = new Barang;
        $barang->id = $request->id;
        $barang->Nama_barang = $request->Nama_barang;
        $barang->Picture = $request->Picture;
        $barang->Merk_barang = $request->Merk_barang;
        $barang->Harga_barang= $request->Harga_barang;

       


       


            $barang->save();

                return redirect('/barang');

        




    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
      
        $barang = Barang::all();  
        return view ('barang1/show', compact('barang'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view ('barang1.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        Barang::where('id', $barang->id)
            ->update([
                'Nama_barang'=> $request->Nama_barang,
                'Picture'=> $request->Picture,
                'Merk_barang'=> $request->Merk_barang,
                'Harga_barang'=> $request->Harga_barang,
            ]);
        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        
        Barang::destroy($barang->id);
        return redirect('/barang');
    }
}
