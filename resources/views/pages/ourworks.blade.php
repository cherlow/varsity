@extends('layouts.pageslayout')
@section('content')


<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover" data-image="assets/images/photos/parallax.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Our Work</h1>
                    </div>
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Our Work</li>
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

                @if (count($works)>0)
                    @foreach ($works as $item)
                           <!-- ***** App Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="page-app">
                            <div class="icon">
                            <img src="/storage/{{$item->framework}}" alt="">
                            </div>
                            <div class="app-content">
                                <h5 class="title">{{$item->name}}</h5>
                            <small><b><a href="{{$item->link}}">{{$item->link}}</a></b></small> 
                                
                                <div class="text">
                                   {{substr($item->description,0,200)}}
                                </div>
                            <a href="{{url('ourworks/'.$item->slug.'')}}" class="btn-primary-line">Project Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- ***** App Item End ***** -->
                    @endforeach
                @else
                    <p><b><i>Uploading our previous works...</i></b></p>
                @endif
             

    
            </div>
        </div>
    </div>
    <!-- ***** Page Content End ***** -->
</section>

    
@endsection