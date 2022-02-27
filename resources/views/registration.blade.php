<!DOCTYPE HTML>

<html lang="en">



<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="LM"><!-- my name1 -->

	<title>AllRent</title>


	<!-- <link rel="shortcut icon" type="image/x-icon" href="images/icons/building.png"> -->
	

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
<!-- ==signin-->


        <div class="container-fluid vh-100" >
            <div class="" style="margin-top:10px">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary">Create Account </h3>
                        </div>
                        <div class="p-4">
                            <form action="">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-envelope text-white"></i></span>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-key-fill text-white"></i></span>
                                    <input type="password" class="form-control" placeholder="password">
                                </div>
                                <div class="d-grid col-12 mx-auto">
                                    <button class="btn btn-primary" type="button"><span></span> Sign up</button>
                                </div>
                                <p class="text-center mt-3">Already have an account?
                                    <span class="text-primary">Sign in</span>
                                </p>
                            </form>
                            <hr>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</div>
</div>

</div>

<!-- </div> -->

	<!-- ========================= SECTION CONTENT END// ========================= -->
	<!-- ========================= FOOTER ========================= -->
	@include('footer')
	
</body>
</html>