@extends('template/navTemplate')
@section('title', 'Detail')
 
@section('boddy')
<div class="container">
  <div class="row">
    <div class="col">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('assets/image/'.$barang->Gambar) }}" class="d-block w-100 img-fluid" style="width: 100%; height: 500px;">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/image/'.$barang->gambarDetail) }}" class="d-block w-100 img-fluid" >
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/image/'.$barang->gambarModel) }}" class="d-block w-100 img-fluid" >
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title text-center">{{$barang->nama}}</h5>
          <p class="card-text">Rp.{{$barang->harga}}.</p>
          <p class="card-text">{{$barang->detail}}</p>
          <p class="card-text">Stok S   : {{$barang->S}}</p>
          <p class="card-text">Stok M   : {{$barang->M}}</p>
          <p class="card-text">Stok L   : {{$barang->L}}</p>
          <p class="card-text">Stok XL  : {{$barang->XL}}</p>
          <p class="card-text">Stok XXL : {{$barang->XXL}}</p>
          <div class="text-center">
              <a href="/admin" class="btn btn-primary">Back</a> 
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>




@endsection