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
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="formGroupExampleInput" placeholder="Nama barang" >
                            @error('nama')
                                <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                         <div class="form-group">
                            <label for="formGroupExampleInput">Harga Barang</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" id="formGroupExampleInput" placeholder="Harga barang" >
                            @error('harga')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                            
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Detail Barang</label>
                            <input type="text" class="form-control @error('detail') is-invalid @enderror" name="detail" id="formGroupExampleInput" placeholder="Detail Barang" >
                            @error('detail')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                            
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang S</label>
                            <input type="text" class="form-control @error('S') is-invalid @enderror" name="S" id="formGroupExampleInput" placeholder="Stok Barang S" >
                            @error('S')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang M</label>
                            <input type="text" class="form-control @error('M') is-invalid @enderror" name="M"id="formGroupExampleInput" placeholder="Stok Barang M" >
                            @error('M')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang L</label>
                            <input type="text" class="form-control @error('L') is-invalid @enderror" name="L" id="formGroupExampleInput" placeholder="Stok Barang L" >
                            @error('L')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang XL</label>
                            <input type="text" class="form-control @error('XL') is-invalid @enderror" name="XL" id="formGroupExampleInput" placeholder="Stok Barang XL" >
                            @error('XL')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang XXL</label>
                            <input type="text" class="form-control @error('XXL') is-invalid @enderror" name="XXL" id="formGroupExampleInput" placeholder="Stok Barang XXL" >
                            @error('XXL')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                        <label for="exampleFormControlFile1">Gambar</label>
                        <div class="form-group">
                            <input type="file"  id="exampleFormControlFile1" name="Gambar" class="@error('Gambar') is-invalid @enderror">
                            @error('Gambar')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                        <label for="exampleFormControlFile1">Gambar Model</label>
                        <div class="form-group">
                            <input type="file"  id="exampleFormControlFile1" name="gambarModel" class="@error('gambarModel') is-invalid @enderror"> 
                            @error('gambarModel')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                        <label for="formGroupExampleInput">Gambar Posisi</label>
                        <div class="form-group">
                            <input type="file"  id="exampleFormControlFile1" name="gambarPosisi" class="@error('gambarPosisi') is-invalid @enderror">  
                            @error('gambarPosisi')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                        <label for="exampleFormControlFile1">Gambar Detail</label>
                        <div class="form-group">
                            <input type="file"  id="exampleFormControlFile1" name="gambarDetail" class="@error('gambarDetail') is-invalid @enderror"> 
                            @error('gambarDetail')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
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
