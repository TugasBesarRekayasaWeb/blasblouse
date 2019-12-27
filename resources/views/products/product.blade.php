@extends('template/userMain')



@section('title', 'Products')

@section('badan')

				<h1>Products</h1>

				@foreach ($product as $prod)
					<div class="card" style="width: 18rem;">
						<a href="/products/{{$prod->id}}/show" style="height: 400px;"><img src="{{ asset('assets/image/'.$prod->gambarModel) }}" class="card-img-top" alt="..."></a>
							<div class="card-body">
							 	<h5 class="card-title">{{$prod->nama}}</h5>
							    <p class="card-text">IDR {{$prod->harga}}</p>
							    <a href="" class="btn">ADD TO SHOPPING BAG</a>
							</div>
					</div>
				@endforeach




@endsection

@section('footer')