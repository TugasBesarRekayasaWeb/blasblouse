@extends('template/main')



@section('title', 'New Arrival')

@section('badan')

			<h1>New Arrival</h1>
			@foreach ($newarrival as $new)
				<div class="card" style="width: 18rem;">
					<img src="{{ asset('assets/image/'.$new->gambarModel) }}" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">{{$new->nama}}</h5>
					<p class="card-text">IDR {{$new->harga}}</p>
					<a href="/newarrivals/1" class="btn">SEE DETAILS</a>
					</div>
				</div>
			@endforeach


@endsection

@section('footer')