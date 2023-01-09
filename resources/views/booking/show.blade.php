<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>SP4Life Permit</title>

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ url('plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Icofont Css -->
    <link rel="stylesheet" href="{{ url('plugins/icofont/icofont.min.css') }}">
    <!-- Themify Css -->
    <link rel="stylesheet" href="{{ url('plugins/themify/css/themify-icons.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ url('plugins/animate-css/animate.css') }}">
    <!-- Magnify Popup -->
    <link rel="stylesheet" href="{{ url('plugins/magnific-popup/dist/magnific-popup.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ url('plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/slick-carousel/slick/slick-theme.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

</head>

<body>


    <!-- Section Menu Start -->
    <!-- Header Start -->
    <nav class="navbar navbar-expand-lg navigation fixed-top" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href={{ '/' }}>
                <h2 class="text-white text-capitalize"></i>SP4<span class="text-color">Life</span></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsid"
                aria-controls="navbarsid" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-view-list"></span>
            </button>
            <div class="collapse text-center navbar-collapse" id="navbarsid">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ '/' }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('aboutus') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('sport.index') }}">Sports</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('court.index') }}">Courts</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('booking.step.one') }}">Booking</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contactus') }}">Contact</a></li>
                </ul>
                @if (!Auth::check())
                    <div class="my-md-0 ml-lg-4 mt-4 mt-lg-0 ml-auto text-lg-right mb-3 mb-lg-0">
                        <a class="navbar-brand" href="{{ route('register') }}">
                            <h3><span class="text-white text-capitalize">REGISTER</span></h3>
                        </a>
                        <a class="navbar-brand" href="{{ route('login') }}">
                            <h3><span class="text-color">Login</span></h3>
                        </a>
                    </div>
                @endif
                @if (Auth::check())
                    <div class="btn-group-left">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <h3><span class="text-white text-capitalize">{{ Auth::user()->name }}</span></h3>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ 'dashboard' }}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                                <li><a class="dropdown-item" href="{{ 'logout' }}">Logout</a></li>
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
                    <h1 class="text-lg text-white mt-2">Booking History</h1>
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
                        <div class="divider mb-1"></div>
                        <h2>Booking History</h2>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table table.bordered">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Full Name
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Booking Number
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Email
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Tel. Number
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Time Slot
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Court Booked
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                View Permit
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookingDetail as $booking)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td
                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $booking->name }}
                                </td>
                                <td
                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $booking->booking_number }}
                                </td>
                                <td
                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $booking->email }}
                                </td>
                                <td
                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $booking->tel_number }}
                                </td>
                                <td
                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $booking->book_time }}
                                </td>
                                <td
                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $booking->courts->name }}
                                </td>
                                <td
                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex space-x-2">
                                        <div class="text-center">
                                            <a href="{{ route('booking.qrcode', $booking->id) }}"><button
                                                    class="btn btn-main mt-3 " type="">VIEW</button></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Section Footer Start -->
    <!-- footer Start -->
    <footer class="footer bg-black-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-5 mb-lg-0">
                    <h2 class="text-white mb-4">SP4LIFE</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus illo ad quo sunt maiores,
                        sint nostrum omnis eaque cumque dolorum.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>

                <div class="col-lg-5 col-md-5 mb-5 mb-lg-0">
                    <div class="footer-widget">
                        <h4 class="mb-4 text-white letter-spacing text-uppercase">Quick Links</h4>
                        <ul class="list-unstyled footer-menu lh-40 mb-0">
                            <li><a href="about.html"><i class="ti-angle-double-right mr-2"></i>About Us</a></li>
                            <li><a href="service.html"><i class="ti-angle-double-right mr-2"></i>sport</a></li>
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
                        <li class="list-inline-item"><a href="https://github.com/ShahRenin/Tech4Life"><i
                                    class="ti-github"></i></a></li>
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
    <script src="{{ url('plugins/jquery/jquery.js') }}"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{ url('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ url('plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <!--  Magnific Popup-->
    <script src="{{ url('plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <!-- Form Validator -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="{{ url('plugins/google-map/gmap.js') }}"></script>

    <script src="{{ url('js/script.js') }}"></script>

</body>

</html>
