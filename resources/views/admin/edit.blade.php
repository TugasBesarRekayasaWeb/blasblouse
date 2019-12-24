@extends('template/navTemplate')
@section('title', 'Ubah')

@section('boddy')
<div class="content">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/barang/{{$barang->id}}">
                    	@method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nama Barang</label>
                            <input type="text" class="form-control" name="nama" id="formGroupExampleInput" placeholder="Nama barang" value="{{$barang->nama}}" >

                        </div>
                         <div class="form-group">
                            <label for="formGroupExampleInput">Harga Barang</label>
                            <input type="text" class="form-control" name="harga" id="formGroupExampleInput" placeholder="Harga barang" value="{{$barang->harga}}">
                            
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Detail Barang</label>
                            <input type="text" class="form-control" name="detail" id="formGroupExampleInput" placeholder="Detail Barang" value="{{$barang->detail}}">
                            
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang S</label>
                            <input type="text" class="form-control" name="S" id="formGroupExampleInput" placeholder="Stok Barang S"  value="{{$barang->S}}">
                            
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang M</label>
                            <input type="text" class="form-control" name="M"id="formGroupExampleInput" placeholder="Stok Barang M" value="{{$barang->M}}">
                            
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang L</label>
                            <input type="text" class="form-control" name="L" id="formGroupExampleInput" placeholder="Stok Barang L" value="{{$barang->L}}" >
                            
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang XL</label>
                            <input type="text" class="form-control" name="XL" id="formGroupExampleInput" placeholder="Stok Barang XL" value="{{$barang->XL}}">
                            
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang XXL</label>
                            <input type="text" class="form-control" name="XXL" id="formGroupExampleInput" placeholder="Stok Barang XXL"   value="{{$barang->XXL}}">
                            
                        </div>
                        <label for="exampleFormControlFile1">Gambar</label>
                        <div class="form-group">
                            <input type="file"  id="exampleFormControlFile1" name="Gambar" 
                            value="{{$barang->Gambar}}">
                            
                        </div>
                        <label for="exampleFormControlFile1">Gambar Model</label>
                        <div class="form-group">
                            <input type="file"  id="exampleFormControlFile1" name="gambarModel" 
                            value="{{$barang->gambarModel}}"> 
                        </div>
                        <label for="formGroupExampleInput">Gambar Posisi</label>
                        <div class="form-group">
                            <input type="file"  id="exampleFormControlFile1" name="gambarPosisi" 
                            value="{{$barang->gambarPosisi}}">  
                        </div>
                        <label for="exampleFormControlFile1">Gambar Detail</label>
                        <div class="form-group">
                            <input type="file"  id="exampleFormControlFile1" name="gambarDetail" 
                            value="{{$barang->gambarDetail}}"> 
                            
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/admin" class="btn btn-danger">kembali</a>
                    </form> 
                </div>
               
            </div>
            
        </div>
    </div>
</div>

@endsection