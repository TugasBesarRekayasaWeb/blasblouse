@extends('template/main')



@section('title', 'New Arrival')

@section('badan')

     <div class="kotak">
          <h5 class="card-title text-center">{{$newarrival->nama}}</h5>
          <p class="card-text">Rp.{{$newarrival->harga}}.</p>
          <p class="card-text">{{$newarrival->detail}}</p>
          <p class="card-text">Stok S   : {{$newarrival->S}}</p>
          <p class="card-text">Stok M   : {{$newarrival->M}}</p>
          <p class="card-text">Stok L   : {{$newarrival->L}}</p>
          <p class="card-text">Stok XL  : {{$newarrival->XL}}</p>
          <p class="card-text">Stok XXL : {{$newarrival->XXL}}</p>
          <div class="text-center">
              <a href="/user" class="btn btn-primary">Back</a>
     </div>


@endsection

@section('footer')