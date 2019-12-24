@extends('layout/template')

@section('title', 'Show')

@section('container')

<div class="container">
  <div class="row">
  <div class="col-10">
<h1 class="mt-3" align="center">Detail Barang</h1>






<table class="table table-sm" >
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama</th>
      <th scope="col">Picture</th>
      <th scope="col">Merk</th>
      <th scope="col">Harga</th>
      <th scope="col">Ubah</th>
      <th scope="col">Hapus</th>
    </tr>
  </thead>
  <tbody>
  @foreach($barang as $barang)
    <tr>
      <th >{{$loop->iteration}}</th>
      <td>{{$barang->Nama_barang}}</td>
      <td>
      <img src="{{asset('Picture/'.$barang->Picture)}}"
     alt="{{$barang->Picture}}" width="100%" height="180px"/>

      </td>

      <td>{{$barang->Merk_barang}}</td>
      <td>{{$barang->Harga_barang}}</td>



      <td>
         <a href="{{$barang->id}}/edit" class="btn btn-outline-warning">Edit</a>
      </td>

    <td>
        <form action="/barang/{{ $barang->id}}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-outline-danger">Delete</button>
        </form>
    </td>



    </tr>
  @endforeach
  </tbody>
</table>


</div>
</div>
</div>
@endsection




