@extends('template/adminTemplate')
@section('title', 'Admin')
@section('dimana', 'Dashboard')
@section('boddy')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">gambar</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $product as $prd)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{ $prd->nama }}</td>
      <td>{{ $prd->harga }}</td>
      <td><img src="{{ asset('assets/image/'.$prd->Gambar) }}" style="width: 50px;height: 50px;"></td>
      <td>
        <a href=""  class="badge badge-success"> Detail </a>
        <a href="/barang/{{$prd->id}}/edit" class="badge badge-primary"> Ubah </a>
        <a href="/barang/{{$prd->id}}" class="badge badge-danger"> Hapus </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- Modal Detail -->
<!-- <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{$prd->id}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->

<!-- Ubah Detail -->
<!-- <div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
                    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Ubah</button>
        </form> 
      </div>
    </div>
  </div>
</div> -->
@endsection

