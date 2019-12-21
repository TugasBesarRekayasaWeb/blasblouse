@extends('template/main')



@section('title', 'Products')

@section('badan')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/index.css') }}">
</head>
<body>

	<div class="container">
	<div class="row">
		<div class="col-3">
			<h1>Products</h1>

			@foreach ($product as $prod)
				<div class="card" style="width: 18rem;">
				<img src="{{ asset('assets/image/'.$prod->gambarModel) }}" class="card-img-top" alt="...">
						<div class="card-body">
						 	<h5 class="card-title">{{$prod->nama}}</h5>
						    <p class="card-text">IDR {{$prod->harga}}</p>
						    <a href="#" class="btn">Quick Shop</a>
						</div>
				</div>
			@endforeach
		</div>
	</div>
</div>

</body>
</html>




@endsection

@section('footer')