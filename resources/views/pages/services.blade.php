@extends('layouts.pageslayout')
@section('content')
<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover" data-image="assets/images/photos/parallax.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Services</h1>
                    </div>
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Services</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Page Top End ***** -->

    <!-- ***** Page Content Start ***** -->
    <div class="page-bottom pbottom-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="javascript:void(0)" class="home-services-item">
                        <i class="fa fa-clone"></i>
                        <h5 class="services-title">Web Development</h5>
                     
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>   Vue.js Development </p>
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>   Angular Development </p>
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>   React Development </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="javascript:void(0)" class="home-services-item">
                        <i class="fa fa-connectdevelop"></i>
                        <h5 class="services-title">Mobile App Development</h5>
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>   Flutter  </p>
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>   Kotlin  </p>
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>   Firebase  </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="javascript:void(0)" class="home-services-item">
                        <i class="fa fa-object-ungroup"></i>
                        <h5 class="services-title">Design & User Experience</h5>
                        
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>    Wireframing & Prototyping </p>
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>    Graphic assets for app stores </p>
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>    User Experience (UX) Design </p>
                        
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="javascript:void(0)" class="home-services-item">
                        <i class="fa fa-line-chart"></i>
                        <h5 class="services-title">Testing and App Monitoring</h5>
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>   Crash Analytics </p>
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>   Usability testing </p>
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>   Ongoing Assistance </p>
                        
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="javascript:void(0)" class="home-services-item">
                        <i class="fa fa-cubes"></i>
                        <h5 class="services-title">Backend & API Development</h5>
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>   Laravel Development </p>
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>   Node.js Development </p>
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>   Django Development </p>
                      
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="javascript:void(0)" class="home-services-item">
                        <i class="fa fa-database"></i>
                        <h5 class="services-title">Database Solutions</h5>
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>   MongoDB </p>
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>   Mysql </p>
                        <p> <span class="fa fa-code" style="font-weight:bold" ></span>   Postgresql </p>
                        
                    </a>
                </div>
              
             
              
            </div>
        </div>
    </div>
    <!-- ***** Page Content End ***** -->
</section>
    
@endsection