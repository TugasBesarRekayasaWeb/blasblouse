<!doctype html>
<html lang="en">
  <head>
  	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/index.css') }}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head> 
  <body>
  	<!-- Nav bar -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
		  <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('assets/image/navbarLogo2.png') }}"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a class="nav-item nav-link" href="{{url('/newarrival')}}">NEW ARRIVAL</a>
		      <a class="nav-item nav-link" href="{{url('/bestseller')}}">BEST SELLER</a>
		      <a class="nav-item nav-link" href="{{url('/sale')}}">SALE</a>
		      <a class="nav-item nav-link" href="{{url('/product')}}">PRODUCT</a>
		    </div>
		  </div>
		  <!-- Search -->
		  	  <form class="form-inline">
			    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			  </form>
		  <!-- End of Search -->
		  <div class="navbar-nav ml-4">
		  	<a class="nav-item nav-link" href="#">shopping bag()</a>
		  </div>
	  </div>

	</nav>

	<!-- End of Nav bar -->
	@yield('badan')



	@yield('footer')

	<div class="clear"></div>
	<div class="footer">
		<div class="sub-footer">
			<h6>PRODUCT</h6>
			<a href="#">Home</a><br>
			<a href="#">New Arrival</a><br>
			<a href="#">Best Seller</a><br>
			<a href="#">Sale</a><br>
			<a href="#">Login</a><br>
		</div>

		<div class="sub-footer">
			<h6>INFORMATION</h6>
			<a href="#">FAQ</a><br>
			<a href="#">Terms & Condition</a><br>
			<a href="#">Privacy Policy</a><br>
		</div>

		<div class="sub-footer">
			<h6>GET IN TOUCH</h6>
			<a href="#">Address</a><br>
			<a href="#">Career</a><br>
		</div>

		<div class="sub-footer">
			<h6>STAY CONNECTED</h6>
		</div>
		
	</div>





     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
  </body>
</html> 