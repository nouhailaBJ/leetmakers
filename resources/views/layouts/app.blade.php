
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title> leet Makeers </title>

    <!-- Favicon -->
    <link rel="icon" href="{{ url('/') }}/img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ url('/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/animate.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/about-sonar.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/classy-nav.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/dzsparallaxer.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/animated-headline.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/style.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{ url('/') }}/css/responsive.css">


</head>

<body class="darker-blue">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area wow fadeInDown" data-wow-delay="0.2s">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="dreamNav">

                    <!-- Logo -->
                   <a class="nav-brand" href="{{ url('/')}} "> <!-- <img src="img/logo.png" alt="logo"> --> leet Makeers </a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li><a href="{{ url('/') }}">Home</a> </li>
                                
                                <li><a href="{{ url('/') }}#projects">Our Projects</a></li>
                                <li><a href="{{ url('/') }}#members">Our Members</a></li>
                                <li><a href="{{ url('/') }}#sponsors">Our Sponsors</a></li>
                                <li><a href="{{ url('/') }}#contact">Contact us</a></li>
                            </ul>

                            <!-- Button -->
                            <a href="{{ url('join_us') }}" class="btn login-btn ml-50">Join Us!</a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('content')
    <div class="clearfix"></div>

   

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" >

        <div class="footer-content-area ">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-12">
                        <div class="footer-copywrite-info">
                            <!-- Copywrite -->
                            <div class="copywrite_text wow fadeInUp" data-wow-delay="0.2s">
                        <center>
                                <div class="footer-logo">
                                 <a href="#"><img src="{{ url('/') }}/img/logo.png" alt="logo"> Leet Makers.</a>
                                </div>
                                <p>Copyright 2019 &copy; TreizeDev All Rights Reserved.</p>
                            </div>
                        </center>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ url('/') }}/js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="{{ url('/') }}/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{ url('/') }}/js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="{{ url('/') }}/js/plugins.js"></script>
    <script src="{{ url('/') }}/js/animated.js"></script>
    <!-- Parallax js -->
    <script src="{{ url('/') }}/js/dzsparallaxer.js"></script>
    <!-- script js -->
    <script src="{{ url('/') }}/js/script.js"></script>
<script>
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
})
</script>
</body>

</html>
