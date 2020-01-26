@extends('layouts.pageslayout')
@section('content')

<section class="page">
        <!-- ***** Page Top Start ***** -->
        <div class="cover" data-image="assets/images/photos/parallax.jpg">
            <div class="page-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Contact Us</h1>
                        </div>
                        <div class="col-lg-12">
                            <ol class="breadcrumb">
                                <li><a href="home.html">Home</a></li>
                                <li class="active">Contact Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Page Top End ***** -->

        <!-- ***** Page Content Start ***** -->
        <div class="page-bottom">
            <div class="map-wrapper">
                <!-- ***** Google Maps Start ***** -->
                <div class="map-canvas"
					data-zoom="12"
					data-lat="-1.2921"
					data-lng="36.8219"
					data-type="geologicmap"
				
					data-title="Hustlance"
					data-icon-path="/assets/images/marker.png"
					data-content="Nairobi, Kenya<br><br><a href='mailto:info@hustlance.com'>mailto:info@hustlance.com</a>">
				</div>
                <!-- ***** Google Maps End ***** -->

                <!-- ***** Contact Informations Start ***** -->
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-8 col-lg-4 col-md-12 col-sm-12">
                            <div class="contact-info">
                                <div class="item">
                                    <i class="fa fa-location-arrow"></i>
                                    <div class="txt">
                                        <span>Nairobi, Kenya</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="fa fa-phone"></i>
                                    <div class="txt">
                                        <span>(+254) 714-028884</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="fa fa-envelope"></i>
                                    <div class="txt">
                                        <span><a href="mailto:info@hustlance.com">info@hustlance.com</a></span>
                                    </div>
                                </div>
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
                </div>
                <!-- ***** Contact Informations End ***** -->
            </div>

            <div class="container">
                <div class="row">
                    <!-- ***** Contact Text Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <h5 class="mbottom-30">Get in touch</h5>
                        <div class="contact-text">
                            <p>It is always a pleisure to hear from you. Fill in the contact form and we will get back to you... Or lets talk about your project, Request a custom quotation for you project.</p>
                        </div>
                    </div>
                    <!-- ***** Contact Text End ***** -->

                    <!-- ***** Contact Form Start ***** -->
                    <form action="">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input name="name" type="text" placeholder="Name, surname" >
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input name="email" type="email" placeholder="E-Mail" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <select name="need" id=""  style="border: 1px solid #eee;
    width: 100%;
    height: 50px;
    outline: none;
    padding-left: 20px;
    padding-right: 20px;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin-bottom: 30px;" required>
                                       <option value="" selected disabled hidden>Please specify your need</option>
                                        <option value="Request Quotation"> Request Quotation </option>
                                        <option value="Request Project Status"> Request Project Status </option>
                                        <option value="Other"> Other </option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Your message"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn-primary-line">SEND</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <!-- ***** Contact Form End ***** -->
                  
                </div>
            </div>
        </div>
        <!-- ***** Page Content End ***** -->
    </section>

@endsection