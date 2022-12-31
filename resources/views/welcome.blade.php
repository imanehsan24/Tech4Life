<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>SP4Life Main Page</title>

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
            <li><a class="dropdown-item" href="#">Logout</a></li>
        </ul>
            </li>
            </div>
            @endif
		</div>
	</div>
</nav>


<!-- Header Close -->

<div class="main-wrapper ">
<!-- Section Menu End -->

<!-- Section Slider Start -->
<!-- Slider Start -->
<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<span class="h6 d-inline-block mb-4 subhead text-uppercase">UTM Sports Facilities</span>
				<h1 class="text-uppercase text-white mb-5">Booking your <span class="text-color">sports venue</span><br>with us</h1>

				<a href="{{('booking')}}" target="_blank" class="btn btn-main " >Booking Now<i class="ti-angle-right ml-3"></i></a>
			</div>
		</div>
	</div>
</section>
<!-- Section Slider End -->


<!-- Section Services Start -->
<section class="section services ">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="section-title">
					<div class="divider mb-3"></div>
					<h2>Sport Facilities</h2>
					<p>We offer booking service for 3 UTM sports facilities.</p>
				</div>
			</div>
		</div>

		<div class="row no-gutters">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-gym-alt-2 text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">WEIGHT LIFTING</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-cycling-alt text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Cycling</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-gym-alt-3 text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">YOGA MEDIDATION</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-muscle text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Building body</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-dumbbell text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Fitness Track</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-gym text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Fitness</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section Services End -->

<!-- Section Gallery Start -->
<section class="gallery">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="section-title">
					<div class="divider mb-3"></div>
					<h2>Our gallery</h2>
					<p>The scenery of our amazing sports facilities in UTM.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid p-0">
		<div class="row no-gutters portfolio-gallery">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-01.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-01.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-02.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-02.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-03.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-03.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-04.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-04.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-05.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-05.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-06.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-06.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-07.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-07.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="images/gallery/gallery-08.jpg" class="popup-gallery">
					<img src="images/gallery/gallery-08.jpg" alt="" class="img-fluid">
				</a>
			</div>
		</div>
	</div>
</section>

<!-- Section Gallery END -->

<!-- Section Course Start -->
<section class="section course bg-gray">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="section-title">
					<div class="divider mb-3"></div>
					<h2>Booking Courts</h2>
					<p>We offer the best court for doing sports activities.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm">
					<img src="images/gallery/course-1.jpg" alt="" class="img-fluid">

					<div class="card-body">
						<a href="course-single.html"><h4 class="font-secondary mb-0">Football</h4></a>
						<p class=" mb-2">Location: </p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6">
				<div class="card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm">
					<img src="images/gallery/course-2.jpg" alt="" class="img-fluid">

					<div class="card-body">
						<a href="course-single.html"><h4 class="font-secondary mb-0">Badminton</h4></a>
						<p class="mb-2">Location:</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6">
				<div class="card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm">
					<img src="images/gallery/course-3.jpg" alt="" class="img-fluid">

					<div class="card-body">
						<a href="course-single.html"><h4 class="font-secondary mb-0">Squash</h4></a>
						<p class=" mb-2">Location:</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm">
					<img src="images/gallery/course-2.jpg" alt="" class="img-fluid">

					<div class="card-body">
						<a href="course-single.html"><h4 class="font-secondary mb-0">Volleyball</h4></a>
						<p class=" mb-2">Location:</p>
					</div>
				</div>
			</div>

		</div>
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="mt-5 text-center">
					<a href="{{('court')}}" class="btn btn-main">See all our courts</a>
				</div>
			</div>
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

