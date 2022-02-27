<!DOCTYPE HTML>

<html lang="en">



<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="LM"><!-- my name1 -->

	<title>AllRent</title>


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
<!--- contact  container ---->
    <section class="my-5">
      <!-- Section heading -->
      <h1 class="h1-responsive font-weight-bold text-center my-5">Contact</h1>
      <!-- Section description -->
      <p class="text-center w-responsive mx-auto pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
        eum porro a pariatur veniam.</p>
    
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-lg-0 mb-4">
          <!-- Form with header -->
              <div class="card">
                <div class="card-body">
              <!-- Header -->
                    <div class="form-header blue accent-1">
                <h3 class="mt-2 text-dark"><i class="fas fa-envelope text-dark"></i> Write to us:</h3>
                     </div>
              <p class="text-secondary">We'll write rarely, but only the best content.</p>
              <!-- input form -->

              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('contactUs') }}" method="POST" name="contact-form">
           
                    <div class="md-form input-group flex-nowrap mb-3 shadow-sm">
                        <div class="input-group-prepend">
                          <i class="fas fa-user prefix grey-text"></i>
                        </div>
                          <input type="text" id="form-name" class="form-control text-secondary" placeholder="Your name">
                    </div>
                        <div class="md-form input-group flex-nowrap mb-3 shadow-sm">
                            <div class="input-group-prepend">
                                <i class="fas fa-envelope prefix text-secondary"></i>
                            </div>
                                 <input type="text" id="form-email" class="form-control text-secondary" placeholder="email">
                        </div>
                              <div class="md-form input-group flex-nowrap mb-3 shadow-sm">
                                <div class="input-group-prepend">
                                   <i class="fas fa-tag prefix text-secondary"></i>
                                </div>
                                  <input type="text" id="form-Subject" class="form-control text-secondary" placeholder="Subject">
                              </div>
<!-- select raion -->                            
                         
<label for="dictricts" class="form-label">Select district:</label>
    <select multiple class="form-select" id="districts" name="districts[]">
                            <option @if(in_array('chisinau', old('districts', []))) selected @endif value="chisinau" >Mun. Chisinau</option>
                            <option @if(in_array('balti', old('districts', []))) selected @endif value="balti" >Balti</option>
                            <option @if(in_array('orhei', old('districts', []))) selected @endif value="orhei" >Orhei</option>
                            <option @if(in_array('straseni', old('districts', []))) selected @endif value="straseni" >Straseni</option>
    </select>
    <!-- end selection -->
    <br>
                            <div class="md-form input-group flex-nowrap mb-3 shadow-sm">
                                    <div class="input-group-prepend">
                                      <i class="fas fa-pencil-alt prefix text-secondary"></i>
                                    </div>
                                    <textarea id="form-text" class="form-control md-textarea text-secondary" rows="3" placeholder="Write message"></textarea>
                                </div>
                                    <div class="text-center">
                                    @csrf
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                      </div>
                    </div>
  </form>
    </div><!-- Form with header -->  
        </div><!-- Grid column -->

           <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12"><!--Google map-->
              <div id="map-container-section" class="z-depth-1-half map-container-section mb-4 border" style="height: 429px">
                <iframe width="100%" height="429" id="gmap_canvas"
                                                    src="https://maps.google.com/maps?q=chisinau&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                    frameborder="0" scrolling="no" marginheight="0"
                                                    marginwidth="0"></iframe>
           
              </div>
          <!-- Buttons-->
                <div class="row text-center">
                  <div class="col-md-4 ic">
                    <a class="btn-floating blue accent-1">
                       <i class="fas fa-map-marker-alt  text-secondary"></i> <!--primary-->
                    </a>
              <!-- <p class="text-secondary">Chisinau</p> -->
              <!-- <p class="mb-md-0 text-secondary">Moldova</p> -->
                  </div>
                    <div class="col-md-4 ic">
                      <a class="btn-floating blue accent-1">
                          <i class="fas fa-phone text-secondary"></i>
                      </a>
                        <p class="text-secondary">Moldova</p>
                    </div>
                        <div class="col-md-4 ic">
                          <a class="btn-floating blue accent-1">
                             <i class="fas fa-envelope text-secondary"></i>
                          </a>
                              <p class="text-secondary">info@gmail.com</p>
              
                </div>
            </div>
        </div><!-- Grid column -->
      </div><!-- Grid row -->
    </section><!-- Section: Contact v.1 -->
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