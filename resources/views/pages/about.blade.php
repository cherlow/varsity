@extends('layouts.pageslayout')
@section('content')

<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover" data-image="assets/images/photos/parallax.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>About Us</h1>
                    </div>
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">About Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Page Top End ***** -->

         <!-- ***** Page Content Start ***** -->
         <div class="page-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
                                    <div class="about-image">
                                        <img src="assets/images/photos/about/1.jpg" class="img-fluid" alt="">
                                       
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 align-self-center mobile-top-fix">
                                    <h2>About Hustlance</h2>
                                    <h3>who is Hustlance?</h3>
                                    <p>Hustlance is a talented group of freelance mobile specialists: app and web developers, UX and UI designers, Product Managers, Strategists, and testers, all focused on delivering full-stack mobile apps and product development services to brands looking forward to grow their business and innovate on mobile.</p>
                                    <a href="#" class="btn-line">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Page Content End ***** -->


</section>


    <!-- ***** Home Parallax Start ***** -->
    <section class="parallax padding-bottom-100">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info" style="padding-top:60px">
                            <h1>Welcome To Hustlance</h1>
                            <p>We design and develop mobile And Web apps that delight your users and grow your business.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Home Parallax End ***** -->

     <!-- ***** Features Small Start ***** -->
     <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <a href="blue-features-single.html" class="features-small-item">
                                <div class="icon">
                                    <i class="fa fa-flag-o"></i>
                                </div>
                                <h5 class="features-title">Challenge Us
                                </h5>
                                <p>We love to be challenged! Come to us with problems, so we can solve them together.</p>
                            </a>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <a href="blue-features-single.html" class="features-small-item">
                                <div class="icon">
                                    <i class="fa fa-paper-plane-o"></i>
                                </div>
                                <h5 class="features-title">Talk to our experts</h5>
                                <p>Our mobile and web app industry experts will guide you to the best version of your final product</p>
                            </a>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <a href="blue-features-single.html" class="features-small-item">
                                <div class="icon">
                                    <i class="fa fa-crosshairs"></i>
                                </div>
                                <h5 class="features-title">Our Strategy</h5>
                                <p>We develop MVPs that are ready to tap the market. Our Clients Satisfaction is the main Agenda.</p>
                            </a>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->
@endsection