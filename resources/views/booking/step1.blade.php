<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>SP4Life Booking</title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{url('plugins/bootstrap/css/bootstrap.min.css')}}">
  <!-- Icofont Css -->
  <link rel="stylesheet" href="{{url('plugins/icofont/icofont.min.css')}}">
  <!-- Themify Css -->
  <link rel="stylesheet" href="{{url('plugins/themify/css/themify-icons.css')}}">
  <!-- animate.css -->
  <link rel="stylesheet" href="{{url('plugins/animate-css/animate.css')}}">
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="{{url('plugins/magnific-popup/dist/magnific-popup.css')}}">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="{{url('plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{url('plugins/slick-carousel/slick/slick-theme.css')}}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{url('css/style.css')}}">

</head>
<body>


<!-- Section Menu Start -->
<!-- Header Start -->
<nav class="navbar navbar-expand-lg navigation fixed-top" id="navbar">
	<div class="container-fluid">
		<a class="navbar-brand" href={{('welcome')}}>
			<h2 class="text-white text-capitalize"></i>SP4<span class="text-color">Life</span></h2>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsid"
			aria-controls="navbarsid" aria-expanded="false" aria-label="Toggle navigation">
			<span class="ti-view-list"></span>
		</button>
		<div class="collapse text-center navbar-collapse" id="navbarsid">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item active">
					<a class="nav-link" href="{{('/')}}">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item"><a class="nav-link" href="{{('aboutus')}}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{('sport')}}">Sports</a></li>
                <li class="nav-item"><a class="nav-link" href="{{('court')}}">Courts</a></li>
				<li class="nav-item"><a class="nav-link" href="{{('booking')}}">Booking</a></li>
				<li class="nav-item"><a class="nav-link" href="{{('contactus')}}">Contact</a></li>
			</ul>
            @if (!Auth::check())
			<div class="my-md-0 ml-lg-4 mt-4 mt-lg-0 ml-auto text-lg-right mb-3 mb-lg-0">
				<a class="navbar-brand" href="{{route('register')}}">
					<h3><span class="text-white text-capitalize">REGISTER</span></h3>
				</a>
				<a class="navbar-brand" href="{{route('login')}}">
					<h3><span class="text-color">Login</span></h3>
				</a>
			</div>
            @endif
            @if (Auth::check())
            <div class="btn-group-left">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"><h3><span class="text-white text-capitalize">{{ Auth::user()->name }}</span></h3></a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{('dashboard')}}">Dashboard</a></li>
            <li><a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a></li>
            <li><a class="dropdown-item" href="{{('logout')}}">Logout</a></li>
        </ul>
            </li>
            </div>
            @endif
		</div>
	</div>
</nav>


<!-- Header Close -->

<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#"
                            class="text-sm letter-spacing text-white text-uppercase font-weight-bold">Home</a>
                    </li>
                    <li class="list-inline-item"><span class="text-white">|</span></li>
                    <li class="list-inline-item"><a href="#"
                            class="text-color text-uppercase text-sm letter-spacing">Booking</a></li>
                </ul>
                <h1 class="text-lg text-white mt-2">Book Here</h1>
            </div>
        </div>
    </div>
</section>

<!-- Section Course Start -->
<section class="section course bg-gray">
	<div class="container"  style="background-color: #cccccc;">
        <div class="my-3 row rounded-md py-2 px-3">
            <form method="POST" action="#" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Full Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                  <label for="telephone">Telephone Number</label>
                  <input type="text" class="form-control" id="telephone" placeholder="Telephone Number">
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="example@gmail.com">
              </div>
              </div>
              <div class="form-group">
                <label for="book_time" class="block text-sm font-medium text-gray-700"> Booking Date
                </label>
                <div class="mt-1">
                    <input type="datetime-local" id="book_time" name="book_time"
                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                </div>
              </div>
              <div class="form-group">
                <label for="status" class="block text-sm font-medium text-gray-700">Court</label>
                <div class="mt-1">
                  <select id="courts_id" name="courts_id" class="form-multiselect block w-full mt-1">
                      @foreach ($courts as $court)
                          <option value="{{ $court->id }}">{{ $court->name }}
                          </option>
                      @endforeach
                  </select>
              </div>
              </div>
              <div class="mx-auto mt-6 p-4">
                <button type="submit"
                    class="bg-indigo-500 hover:bg-indigo-700 rounded-lg text-black">Submit</button>
              </div>
            </form>
        </div>
      </div>
</section>
<!-- Section Course ENd -->

<!-- Section Footer Start -->
<!-- footer Start -->
<footer class="footer bg-black-50">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 mb-5 mb-lg-0">
				<h2 class="text-white mb-4">SP4LIFE</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus illo ad quo sunt maiores, sint nostrum omnis eaque cumque dolorum.</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>

			<div class="col-lg-5 col-md-5 mb-5 mb-lg-0">
				<div class="footer-widget">
					<h4 class="mb-4 text-white letter-spacing text-uppercase">Quick Links</h4>
					<ul class="list-unstyled footer-menu lh-40 mb-0">
                      <li><a href="{{('aboutus')}}"><i class="ti-angle-double-right mr-2"></i>About Us</a></li>
                      <li><a href="{{('sport')}}"><i class="ti-angle-double-right mr-2"></i>Sport</a></li>
                      <li><a href="{{('booking')}}"><i class="ti-angle-double-right mr-2"></i>Booking</a></li>
                      <li><a href="{{('contactus')}}"><i class="ti-angle-double-right mr-2"></i>Contact us</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row align-items-center mt-5 px-3 bg-black mx-1">
			<div class="col-lg-4">
				<p class="text-white mt-3">SP4Life © 2022</p>
			</div>
			<div class="col-lg-6 ml-auto text-right">
				<ul class="list-inline mb-0 footer-socials">
					<li class="list-inline-item"><a href="https://github.com/ShahRenin/Tech4Life"><i class="ti-github"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- Section Footer End -->

<!-- Section Footer Scripts -->
   </div>

   <!--
    Essential Scripts
    =====================================-->


   <!-- Main jQuery -->
   <script src="{{url('plugins/jquery/jquery.js')}}"></script>
   <!-- Bootstrap 4.3.1 -->
   <script src="{{url('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
   <!-- Slick Slider -->
   <script src="{{url('plugins/slick-carousel/slick/slick.min.js')}}"></script>
   <!--  Magnific Popup-->
   <script src="{{url('plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
   <!-- Form Validator -->
   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
   <!-- Google Map -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
   <script src="{{url('plugins/google-map/gmap.js')}}"></script>

   <script src="{{url('js/script.js')}}"></script>

   </body>

   </html>
