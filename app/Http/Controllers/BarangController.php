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
        $product = Barang::all();
        return view('/admin',['product'=> $product]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    
       $this->Validate($request,[
            'nama' => 'required',
            'harga' => 'required',
            'detail' => 'required',
            'S'=>'required',
            'M'=>'required',
            'L'=>'required',
            'XL'=>'required',
            'XXL'=>'required',
            'Gambar'=>'required',
            'gambarModel'=>'required',
            'gambarPosisi'=>'required',
            'gambarDetail'=>'required' 

        ]);
       Barang::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'detail' => $request->detail,
            'S'=> $request->S,
            'M'=> $request->M,
            'L'=> $request->L,
            'XL'=> $request->XL,
            'XXL'=> $request->XXL,
            'Gambar'=> $request->Gambar,
            'gambarModel'=> $request->gambarModel,
            'gambarPosisi'=> $request->gambarPosisi,
            'gambarDetail'=> $request->gambarDetail
        ]);
       return redirect()->route('admin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view ('admin.edit', compact('barang'));
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
         $this->Validate($request,[
            'nama' => 'required',
            'harga' => 'required',
            'detail' => 'required',
            'S'=>'required',
            'M'=>'required',
            'L'=>'required',
            'XL'=>'required',
            'XXL'=>'required',
            'Gambar'=>'required',
            'gambarModel'=>'required',
            'gambarPosisi'=>'required',
            'gambarDetail'=>'required' 

        ]);
        Barang::where('id', $barang->id)
            ->update([
                'nama' => $request->nama,
            'harga' => $request->harga,
            'detail' => $request->detail,
            'S'=> $request->S,
            'M'=> $request->M,
            'L'=> $request->L,
            'XL'=> $request->XL,
            'XXL'=> $request->XXL,
            'Gambar'=> $request->Gambar,
            'gambarModel'=> $request->gambarModel,
            'gambarPosisi'=> $request->gambarPosisi,
            'gambarDetail'=> $request->gambarDetail
            ]);
        return redirect('/admin');
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
        return redirect()->route('admin');
    }
    public function show(Barang $barang)
    {
        return view ('admin.show', compact('barang'));
    }
    public function detail(Barang $barang)
    {
        return view ('products.show', compact('barang'));
    }
}
