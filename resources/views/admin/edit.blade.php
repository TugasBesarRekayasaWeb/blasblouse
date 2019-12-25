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
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="formGroupExampleInput" placeholder="Nama barang" value="{{$barang->nama}}">
                            @error('nama')
                                <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                         <div class="form-group">
                            <label for="formGroupExampleInput">Harga Barang</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" id="formGroupExampleInput" placeholder="Harga barang" value="{{$barang->harga}}">
                            @error('harga')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                            
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Detail Barang</label>
                            <input type="text" class="form-control @error('detail') is-invalid @enderror" name="detail" id="formGroupExampleInput" placeholder="Detail Barang" value="{{$barang->detail}}">
                            @error('detail')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                            
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang S</label>
                            <input type="text" class="form-control @error('S') is-invalid @enderror" name="S" id="formGroupExampleInput" placeholder="Stok Barang S" value="{{$barang->S}}">
                            @error('S')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang M</label>
                            <input type="text" class="form-control @error('M') is-invalid @enderror" name="M"id="formGroupExampleInput" placeholder="Stok Barang M" value="{{$barang->M}}" >
                            @error('M')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang L</label>
                            <input type="text" class="form-control @error('L') is-invalid @enderror" name="L" id="formGroupExampleInput" placeholder="Stok Barang L" value="{{$barang->L}}" >
                            @error('L')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang XL</label>
                            <input type="text" class="form-control @error('XL') is-invalid @enderror" name="XL" id="formGroupExampleInput" placeholder="Stok Barang XL" value="{{$barang->XL}}" >
                            @error('XL')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Stok barang XXL</label>
                            <input type="text" class="form-control @error('XXL') is-invalid @enderror" name="XXL" id="formGroupExampleInput" placeholder="Stok Barang XXL" value="{{$barang->XXL}}">
                            @error('XXL')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                        <label for="exampleFormControlFile1">Gambar</label>
                        <div class="form-group">
                            <input type="file"  id="exampleFormControlFile1" name="Gambar" class="@error('Gambar') is-invalid @enderror" value="{{$barang->Gambar}}">
                            @error('Gambar')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                        <label for="exampleFormControlFile1">Gambar Model</label>
                        <div class="form-group">
                            <input type="file"  id="exampleFormControlFile1" name="gambarModel" class="@error('gambarModel') is-invalid @enderror" value="{{$barang->gambarModel}}"> 
                            @error('gambarModel')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                        <label for="formGroupExampleInput">Gambar Posisi</label>
                        <div class="form-group">
                            <input type="file"  id="exampleFormControlFile1" name="gambarPosisi" class="@error('gambarPosisi') is-invalid @enderror" value="{{$barang->gambarPosisi}}">  
                            @error('gambarPosisi')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                        <label for="exampleFormControlFile1">Gambar Detail</label>
                        <div class="form-group">
                            <input type="file"  id="exampleFormControlFile1" name="gambarDetail" class="@error('gambarDetail') is-invalid @enderror" value="{{$barang->gambarDetail}}"> 
                            @error('gambarDetail')
                                 <div class="invalid-feedback">{{$message}}</div>
                             @enderror
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