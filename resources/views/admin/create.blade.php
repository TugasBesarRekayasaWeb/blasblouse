@extends('template/adminTemplate')
@section('title', 'Admin')

@section('boddy')
<div class="content">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nama Barang</label>
                            <input type="text" class="form-control" name="nama" id="formGroupExampleInput" placeholder="Nama barang" >
                        </div>
                         <div class="form-group">
                            <label for="formGroupExampleInput">Harga Barang</label>
                            <input type="text" class="form-control" name="harga" id="formGroupExampleInput" placeholder="Harga barang" >
                            
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Detail Barang</label>
                            <input type="text" class="form-control" name="detail" id="formGroupExampleInput" placeholder="Detail Barang" >
                            
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang S</label>
                            <input type="text" class="form-control" name="S" id="formGroupExampleInput" placeholder="Stok Barang S" >
                            
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang M</label>
                            <input type="text" class="form-control" name="M"id="formGroupExampleInput" placeholder="Stok Barang M" >
                            
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang L</label>
                            <input type="text" class="form-control" name="L" id="formGroupExampleInput" placeholder="Stok Barang L" >
                            
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang XL</label>
                            <input type="text" class="form-control" name="XL" id="formGroupExampleInput" placeholder="Stok Barang XL" >
                            
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang XXL</label>
                            <input type="text" class="form-control" name="XXL" id="formGroupExampleInput" placeholder="Stok Barang XXL" >
                            
                        </div>
                        <label for="exampleFormControlFile1">Gambar</label>
                        <div class="form-group">
                            <input type="file"  id="exampleFormControlFile1" name="Gambar">
                            
                        </div>
                        <label for="exampleFormControlFile1">Gambar Model</label>
                        <div class="form-group">
                            <input type="file"  id="exampleFormControlFile1" name="gambarModel"> 
                        </div>
                        <label for="formGroupExampleInput">Gambar Posisi</label>
                        <div class="form-group">
                            <input type="file"  id="exampleFormControlFile1" name="gambarPosisi">  
                        </div>
                        <label for="exampleFormControlFile1">Gambar Detail</label>
                        <div class="form-group">
                            <input type="file"  id="exampleFormControlFile1" name="gambarDetail"> 
                            
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form> 
                </div>
               
            </div>
            
        </div>
    </div>
</div>

@endsection
@section('footer')
