<!DOCTYPE HTML>

<html lang="en">



<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="LM"><!-- my name1 -->

	<title>AllRent</title>


	<!--<link rel="shortcut icon" type="image/x-icon" href="images/icons/building.png"> -->
	

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	

	
	<!--our styles -->

	
	{{-- <link rel="stylesheet" href="{{asset('assets/blog/css/blog.css')}}"> --}}

	<link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">

</head>



<body>
	{{-- <img src="{{ asset('/assets/images/studio.jpg') }}"> --}}
	<div class="container">
	<!--header - nav menu-->
			@include('header')
    			<div class="row">
					
        			<div class="col-9">
						<div class="content-body">
						@yield('content') 
						</div>
					</div>
					<div class="col-3">
						<div class="news-block"> 
				
						@include('blog.popular-articles')
		 				</div> 
					</div>
				</div>
	</div>



	<!-- ========================= SECTION CONTENT END// ========================= -->
	<!-- ========================= FOOTER ========================= -->
	@include('footer')

	
</body>
</html>