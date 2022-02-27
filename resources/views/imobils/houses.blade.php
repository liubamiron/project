<!DOCTYPE HTML>

<html lang="en">



<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="LM"><!-- my name1 -->

	<title>Houses rent</title>


	<!-- <link rel="shortcut icon" type="image/x-icon" href="images/icons/building.png"> -->
	

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	
	<!-- custom javascript -->
	<!-- <script src="js/script.js" type="text/javascript"></script> -->
	
	<!--our styles -->
	
	<link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">

</head>



<body>
	<!-- <img src="{{ asset('/assets/images/studio.jpg') }}"> -->
<div class="container">
	<!--header-->
@include('header')
            <div class="row">
                <div class="col-sm-12">
<!--content-->

		<nav aria-label="breadcrumb">
 			 <ol class="breadcrumb">
    			<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
    				<li class="breadcrumb-item"><a href="{{route('apartment')}}">Apartments</a></li>
    					<li class="breadcrumb-item active" aria-current="page">Houses</li>
  			</ol>
		</nav>
<!--filter-->
<div class="clearfix">
			<strong style="float: left; margin: 10px 10px 0 0;">Filter by:</strong>
							<ul style="float: left; list-style:none;">
							<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Building type</a>
                                        <ul class="dropdown-menu">
                                			<li><a class="dropdown-item" href="#">New</a></li>
                                			<li><a class="dropdown-item" href="#">Secondary</a></li>
                                        </ul>
                            </li>
							</ul>
							<ul style="float: left; list-style: none;">
							<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Floor</a>
                                        <ul class="dropdown-menu">
                                			<li><a class="dropdown-item" href="#">1</a></li>
                                			<li><a class="dropdown-item" href="#">2</a></li>
											<li><a class="dropdown-item" href="#">3</a></li>
                                        </ul>
                            </li>

							</ul>

							<ul style="float: left; list-style: none;">
							<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Balcony</a>
                                        <ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">none</a></li>
                                			<li><a class="dropdown-item" href="#">1</a></li>
                                			<li><a class="dropdown-item" href="#">2</a></li>
											<li><a class="dropdown-item" href="#">3</a></li>
                                        </ul>
                            </li>

							</ul>

							<ul style="float: left; list-style: none;">
							<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">City</a>
                                        <ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Chisinau</a></li>
                                			<li><a class="dropdown-item" href="#">Balti</a></li>
                                			<li><a class="dropdown-item" href="#">Orhei</a></li>
											<li><a class="dropdown-item" href="#">Ialoveni</a></li>
                                			<li><a class="dropdown-item" href="#">Comrat</a></li>
											<li><a class="dropdown-item" href="#">Riscani</a></li>
                                        </ul>
                            </li>

							</ul>


</div>

<!--houses cards-->
<div class="card" style="width:250px; float:left; margin: 0 20px 0 50px;">
           <img src="{{ asset('/assets/images/houses/article1.jpg') }}" class="d-block w-100" alt="2 rooms house" style="width:100%">
             <div class="card-body">
                  <h5 class="card-title">2 rooms house</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
                  <a href="#" class="btn btn-primary">500 Euro</a>
            </div>
        </div>
        <div class="card" style="width:250px; float:left; margin: 0 20px 0 10px;">
           <img src="{{ asset('/assets/images/houses/article2.jpg') }}" class="d-block w-100" alt="2 rooms apartment" style="width:100%">
             <div class="card-body">
                  <h5 class="card-title">2 rooms house</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
                  <a href="{{route('housesItem')}}" class="btn btn-primary">400 Euro</a>
            </div>
        </div>
        <div class="card" style="width:250px; float:left; margin: 0 20px 0 10px;">
           <img src="{{ asset('/assets/images/houses/article3.jpg') }}" class="d-block w-100" alt="2 rooms apartment" style="width:100%">
             <div class="card-body">
                  <h5 class="card-title">3 rooms house</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
                  <a href="{{route('housesItem')}}" class="btn btn-primary">500 Euro</a>
            </div>
        </div>
        <div class="card" style="width:250px; float:left; margin: 0 20px 0 10px;">
           <img src="{{ asset('/assets/images/houses/article3.jpg') }}" class="d-block w-100" alt="2 rooms apartment" style="width:100%">
             <div class="card-body">
                  <h5 class="card-title">3 rooms house</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
                  <a href="#" class="btn btn-primary">500 Euro</a>
            </div>
        </div>
		<!--line 2 houses cards-->
		<div class="card" style="width:250px; float:left; margin: 10px 20px 10px 50px;">
           <img src="{{ asset('/assets/images/apart1_1resize.jpg') }}" class="d-block w-100" alt="2 rooms house" style="width:100%">
             <div class="card-body">
                  <h5 class="card-title">2 rooms house</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
                  <a href="#" class="btn btn-primary">650 Euro</a>
            </div>
        </div>
        <div class="card" style="width:250px; float:left; margin: 10px 20px 10px  10px;">
           <img src="{{ asset('/assets/images/houses/article3.jpg') }}" class="d-block w-100" alt="3 rooms house" style="width:100%">
             <div class="card-body">
                  <h5 class="card-title">3 rooms house</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
                  <a href="#" class="btn btn-primary">700 Euro</a>
            </div>
        </div>
        <div class="card" style="width:250px; float:left; margin: 10px 20px 10px 10px;">
           <img src="{{ asset('/assets/images/houses/article5.jpg') }}" class="d-block w-100" alt="2 rooms apartment" style="width:100%">
             <div class="card-body">
                  <h5 class="card-title">2 rooms house</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
                  <a href="#" class="btn btn-primary">500 Euro</a>
            </div>
        </div>
        <div class="card" style="width:250px; float:left; margin: 10px 20px 10px 10px;">
           <img src="{{ asset('/assets/images/houses/article3.jpg') }}" class="d-block w-100" alt="2 rooms apartment" style="width:100%">
             <div class="card-body">
                  <h5 class="card-title">3 rooms house</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
                  <a href="#" class="btn btn-primary">500 Euro</a>
            </div>
        </div>
		<!--end line2-->



				</div>
			</div>
                  
</div>



	<!-- ========================= SECTION CONTENT END// ========================= -->
	<!-- ========================= FOOTER ========================= -->
	@include('footer')
	
</body>
</html>