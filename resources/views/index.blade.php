<!doctype html>
<html lang="en">
  <head>
  	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/index.css') }}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

    <title>BlasBlouse</title>
  </head> 
  <body>

  	<!-- Nav bar -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
		  <a class="navbar-brand" href="#"><img src="{{ asset('assets/image/navbarLogo.png') }}"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a class="nav-item nav-link" href="/newarrival">NEW ARRIVAL</a>
		      <a class="nav-item nav-link" href="/bestseller">BEST SELLER</a>
		      <a class="nav-item nav-link" href="/sale ">SALE</a>
		    </div>
		  </div>
		  <!-- Search -->
		  	  <form class="form-inline">
			    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			  </form>
		  <!-- End of Search -->
	  </div>

	</nav>

	<!-- End of Nav bar -->

	<div class="container">
		<div class="row">
			<div class="col-10">
				<!-- <h1 class="mt-2">Hello, world!</h1> -->
			</div>
		</div>
	</div>

	<!-- Slide show -->
		  		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel"  style="background-color: black;">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="navbarLogo.png" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h5>First slide label</h5>
				        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="navbarLogo.png" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h5>Second slide label</h5>
				        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="navbarLogo.png" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h5>Third slide label</h5>
				        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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



     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
  </body>
</html> 