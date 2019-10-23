<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hustlance - Mobile App Development Agency </title>
    <meta name="description" content="Hustlance is a Mobile App Development." />
    <meta name="keywords" content="Hustlance, mobile app, agency, development, html,wordpress developers, freelance developers in kenya,freelance, hustlance,hustlancers" />
    <meta name="author" content="Hustlance" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/images/favicon.png" />

    <!-- Bootstrap & Plugins CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="../../external.html?link=https://www.googletagmanager.com/gtag/js?id=UA-118135390-1"></script> -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-118135390-1');
    </script>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div class="loader-wrapper">
        <div class="center">
            <div class="dot dot-one"></div>
            <div class="dot dot-two"></div>
            <div class="dot dot-three"></div>
            <div class="dot dot-four"></div>
            <div class="dot dot-five"></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                    <a href="{{url('/')}}" class="logo">
                            <img src="/assets/images/logo-white.svg" class="light-logo" alt="Beapp" />
                            <img src="/assets/images/logo-dark.svg" class="dark-logo" alt="Beapp" />
                        </a>
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{url('/')}}">HOME</a></li>
                            <li><a href="{{url('/ourworks')}}">OUR WORK</a></li>
                        <li><a href="{{url('/about')}}">ABOUT US</a></li>
                        <li><a href="{{url('/services')}}">SERVICES</a></li>
                        <li><a href="{{url('/blog')}}">BLOG</a></li>
                        <li><a href="{{url('/contact')}}">CONTACT</a></li>
                        
                        @auth

                        <li class="submenu">
                        <a href="javascript:;" style="text-transform:uppercase"> <span class="fa fa-user"></span>  {{ auth()->user()->name}}</a>
								<ul class="active">
									<li><a href="blue-about.html">MY PROJECTS</a></li>
									<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">LOGOUT</a>
                                        
                                    {{-- logout form here --}}
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
								
								</ul>
                            </li>
                            
                            @else

                            <li><a href="{{url('/login')}}" class="btn-nav-line">ACCOUNT</a></li>
                        @endauth
                      
                        <li><a href="{{url('/newproject')}}" class="btn-nav-line"> REQUEST QUOTE</a></li>
                       
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('content');



     <!-- ***** Counter Parallax Start ***** -->
     <section class="parallax" data-image="/assets/images/photos/parallax.jpg" >
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="info">
                            <p>We design and develop <span>mobile apps</span> that delight your users and grow your business.</p>
                            <a class="btn-white-line" href="#">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->




    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <img src="/assets/images/logo-dark.svg" class="logo" alt="">
                    <div class="text">We are a talented group of freelance mobile specialists: app and web developers, UX and UI designers, Product Managers, Strategists, and testers, all focused on delivering full-stack mobile apps and product development services to brands looking forward to grow their business and innovate on mobile.</div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <h5>Helpful Links</h5>
                    <ul class="footer-nav">
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Our Work</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>About Us</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Services</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Blog</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Contact</span></a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <h5>Latest Apps</h5>
                    <ul class="footer-nav">
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Dance School</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Coiner</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Cloud Manager</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Coding Life</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Smart Office</span></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <h5>Contact Us</h5>
                    <div class="address">
                        <p>455 West Orchard Street<br>Kings Mountain, NC 28086</p>
                        <p>Phone: (254) 211-7370</p>
                        <p><span>E-Mail:</span><a href="#">info@hustlance.com</a></p>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-github-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">© 2019 Hustlance. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Start ***** -->



    <!-- jQuery -->
    <script src="/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="/assets/js/scrollreveal.min.js"></script>
    <script src="/assets/js/parallax.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="/assets/js/custom.js"></script>
</body>



</html>
