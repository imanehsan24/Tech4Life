<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>SP4Life Contact Us</title>

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

<!-- Header Start -->
<nav class="navbar navbar-expand-lg navigation fixed-top" id="navbar">
	<div class="container-fluid">
		<a class="navbar-brand" href="welcome.blade.php">
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
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">Venue</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="about.html">Badminton</a></li>
						<li><a class="dropdown-item" href="trainer.html">Squash</a></li>
						<li><a class="dropdown-item" href="course.html">Football</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link" href="service.html">Booking</a></li>
				<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
			</ul>
			<div class="my-md-0 ml-lg-4 mt-4 mt-lg-0 ml-auto text-lg-right mb-3 mb-lg-0">
				<a class="navbar-brand" href="{{route('register')}}">
					<h3><span class="text-white text-capitalize">REGISTER</span></h3>
				</a>
				<a class="navbar-brand" href="{{route('login')}}">
					<h3><span class="text-color">Login</span></h3>
				</a>
			</div>
		</div>
	</div>
</nav>


<!-- Header Close -->

<div class="main-wrapper ">
<section class="page-title bg-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
          <ul class="list-inline mb-0">
            <li class="list-inline-item"><a href="index.html" class="text-sm letter-spacing text-white text-uppercase font-weight-bold">Home</a></li>
            <li class="list-inline-item"><span class="text-white">|</span></li>
            <li class="list-inline-item"><a href="#" class="text-color text-uppercase text-sm letter-spacing">contact</a></li>
          </ul>
           <h1 class="text-lg text-white mt-2">Contact Us</h1>
      </div>
    </div>
  </div>
</section>


<!-- contact form start -->
<section class="contact-form section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="section-title">
          <div class="divider mb-3"></div>
          <h2>Contact Us</h2>
          <p class="mt-3">Feel free to ask us about anything here!</p>
        </div>
      </div>
    </div>

    <div class="row justify-content-center pb-5">
      <div class="col-lg-9 text-center">
        <form id="contact-form">
          <div class="form-row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                <input name="user_name" type="text" class="form-control" placeholder="Your Name">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                <input name="user_email" type="text" class="form-control" placeholder="Email Address">
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="form-group-2">
                <textarea name="user_message" class="form-control" rows="8" placeholder="Your Message"></textarea>
              </div>

              <div class="text-center">
                <button class="btn btn-main mt-3 " type="submit">Send Message</button>
              </div>
            </div>
          </div>
          <div class="error" id="error">Sorry Msg dose not sent</div>
          <div class="success" id="success">Message Sent</div>
        </form>
      </div>
    </div>
  </div>
</section>

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
						<li><a href="about.html"><i class="ti-angle-double-right mr-2"></i>About Us</a></li>
						<li><a href="service.html"><i class="ti-angle-double-right mr-2"></i>Venue</a></li>
						<li><a href="pricing.html"><i class="ti-angle-double-right mr-2"></i>Booking</a></li>
						<li><a href="contact.html"><i class="ti-angle-double-right mr-2"></i>Contact us</a></li>
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