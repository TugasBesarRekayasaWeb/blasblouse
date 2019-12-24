@extends('layout/template')

@section('title', 'Index')

@section('container')

<div class="container">
  <div class="row ">
  <div class="col-10 ">

    <h4 class="text-center font-weight-bold mt-4" >Daftar Barang</h4>
    </div>
  </div>

  
    <div class="row mt-2">
    @foreach($barang as $brg)
    <div class="col-4">
    <div class="card mr-2 ml-2" style="width: 16rem;">
    <div class="card" style="width: 18rem;">
  <img src="{{asset('Picture/'.$brg->Picture)}}" class="card-img-top" alt="{{$brg->Picture}}" width="100%" height="180px"/>
  <div class="card-body">
    <h5 class="card-title" align="center">{{ $brg->Nama_barang}}</h5>
  
    <a href="/barang/{{$brg->id}}" class="badge badge-info">Detail</a>
  </div>
  </div>
  </div>
  </div>
@endforeach

    </div>
  </div>
  @endsection

