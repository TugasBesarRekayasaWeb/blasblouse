@extends('template/main')



@section('title', 'Detail Product')

@section('badan')

			<h1>Detail Product</h1>
			@foreach ($newarrival as $new)
				<div class="card" style="width: 18rem;">
					<img src="{{ asset('assets/image/'.$new->gambarModel) }}" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">{{$new->nama}}</h5>
					<p class="card-text">IDR {{$new->harga}}</p>
					<p class="card-text">IDR {{$new->detail}}</p>
					<img src="{{ asset('assets/image/'.$new->Gambar) }}" class="card-img-top" alt="...">
					<img src="{{ asset('assets/image/'.$new->gambarModel) }}" class="card-img-top" alt="...">
					<img src="{{ asset('assets/image/'.$new->gambarPosisi) }}" class="card-img-top" alt="...">
					<img src="{{ asset('assets/image/'.$new->gambarDetail) }}" class="card-img-top" alt="...">
					<a href="/newarrivals/1" class="btn">SEE DETAILS</a>
					</div>
				</div>
			@endforeach


@endsection

@section('footer')