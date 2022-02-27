<header class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="{{route('home')}}" style="font-family: cursive; font-size: 200%;">AllRent</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

							<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{route('apartment')}}" role="button" aria-expanded="false">Apartments</a>
                                        <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">1 room</a></li>
                                <li><a class="dropdown-item" href="#">2 rooms</a></li>
                                <li><a class="dropdown-item" href="#">3 rooms</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{route('apartment')}}">All Apartments</a></li>
                                        </ul>
                            </li>

                                    
	  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{route('house')}}" role="button" aria-expanded="false">Houses</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">1 room</a></li>
      <li><a class="dropdown-item" href="#">2 rooms</a></li>
      <li><a class="dropdown-item" href="#">3 rooms</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="{{route('house')}}">All Houses</a></li>
    </ul>
  </li>
                                    <li class="nav-item">
										<a class="nav-link" href="{{route('blog')}}">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('contactUs')}}">Contact Us</a>
                                    </li>
                                </ul>

                                <ul>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('registration')}}">Sign Up/Sign in</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Add Rent</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <div class="contact-tel">
                                        <a class="nav-link active" aria-current="page" href="../contact" 
                                        style="font-size: 20px;"
                                            >+373 22224444</a></div>
                                    </li>

                                </ul>
                                <form class="d-flex">
                                    <input class="form-control me-2 border-bottom" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success border-bottom " type="submit"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg></button>
                                </form>
                            </div>
                        </div>
                    </nav>