@extends('template/main')



@section('title', 'BlasBlouse')

@section('badan')
	<!-- Slide show -->
		  		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel"  style="background-color: black;">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="{{ asset('assets/image/slide.png') }}" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <!-- <h5>First slide label</h5> -->
				        <!-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="{{ asset('assets/image/slide2.png') }}" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <!-- <h5>Second slide label</h5> -->
				        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="{{ asset('assets/image/slide.png') }}" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <!-- <h5>Third slide label</h5> -->
				        <!-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
				      </div>
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
		  <!-- End of Slide show -->


<!-- Popular This Week -->

	<h1>POPULAR THIS WEEK</h1>
	<div class="card" style="width: 18rem;">
		<img src="{{ asset('assets/image/1.jpg') }}" class="card-img-top" alt="...">
			<div class="card-body">
			 	<h5 class="card-title">Cotton T-shirt</h5>
			    <p class="card-text">IDR. 70.000</p>
			    <a href="#" class="btn">Quick Shop</a>
			</div>
	</div>

	<div class="card" style="width: 18rem;">
		<img src="{{ asset('assets/image/2.jpg') }}" class="card-img-top" alt="...">
			<div class="card-body">
			 	<h5 class="card-title">Cotton T-shirt</h5>
			    <p class="card-text">IDR. 70.000</p>
			    <a href="#" class="btn">Quick Shop</a>
			</div>
	</div>

	<div class="card" style="width: 18rem;">
		<img src="{{ asset('assets/image/3.jpg') }}" class="card-img-top" alt="...">
			<div class="card-body">
			 	<h5 class="card-title">Cotton T-shirt</h5>
			    <p class="card-text">IDR. 70.000</p>
			    <a href="#" class="btn">Quick Shop</a>
			</div>
	</div>



<!-- End of Popular This Week -->
@endsection

@section('footer')

