@extends('layouts.pageslayout')
@section('content')



<section class="page">
		<!-- ***** Page Top Start ***** -->
		<div class="cover" data-image="/assets/images/photos/parallax.jpg">
			<div class="page-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
                        <h1>{{$work->name}}</h1>
						</div>
						<div class="col-lg-12">
							<ol class="breadcrumb">
								<li><a href="{{url('/')}}">Home</a></li>
								<li><a href="{{url('/ourworks')}}">Our Work</a></li>
                            <li class="active">{{$work->name}}</li>
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
						<div class="app-single">
							<!-- ***** App Header Start ***** -->
							<div class="header">
								<div class="row">
									<div class="col-lg-1 col-md-2 col-sm-12">
										<div class="icon">
                                        <img src="/storage/{{$work->framework}}" class="img-fluid" alt="">
										</div>
									</div>
									<div class="col-lg-5 col-md-4 col-sm-12">
										<div class="title">
                                        <h2>{{$work->name}}</h2>
                                        <small><b><a href="{{$work->link}}">{{$work->link}}</a></b></small> 
										</div>
									</div>
									{{-- <div class="col-lg-6 col-md-6 col-sm-12">
										<div class="download-buttons">
											<a href="#"><img src="assets/images/download-apple-store.svg" alt=""></a>
											<a href="#"><img src="assets/images/download-google-play.svg" alt=""></a>
										</div>
									</div> --}}
								</div>
							</div>
							<!-- ***** App Header End ***** -->

							<!-- ***** App Description Start ***** -->
							<div class="item">
								<div class="icon">
									<i class="fa fa-file-text-o"></i>
								</div>
								<div class="content">
									<h5 class="title">Description</h5>
									<div class="text">
                                          
                                           

                                           
                                       
                                           
                                            {{-- {{count($work->images)}} --}}
										{{$work->description}}
									</div>
								</div>
							</div>
							<!-- ***** App Description End ***** -->

							<!-- ***** Screenshot Start ***** -->
							<div class="item">
								<div class="icon">
									<i class="fa fa-file-image-o"></i>
								</div>
								<div class="content">
                                <h5 class="title">Screenshots </h5>
                              
									<div class="row gallery">
                                            <?php $data=json_decode($work->images) ?>

                                            @foreach ($data as $item)
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <a class="gallery-item" href="/storage/{{$item}}" title="Screenshot 1">
                                                        <img src="/storage/{{$item}}" class="img-fluid" alt="">
                                                    </a>
                                                </div>
                                            @endforeach
										
									
										
									
									</div>
								</div>
							</div>
							<!-- ***** Screenshot End ***** -->

						
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Page Content End ***** -->
	</section>

@endsection