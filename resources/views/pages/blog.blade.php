@extends('layouts.pageslayout')
@section('content')

<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover" data-image="/assets/images/photos/parallax.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Blog</h1>
                    </div>
                    <div class="col-lg-12">
                       {!! $breadcrumb!!}
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
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-list">
                        <div class="row">
                            <!-- ***** Blog Post Big Start ***** -->
                            <div class="col-lg-12">
                                <div class="blog-post-thumb big">
                                    <div class="img">
                                    <img src="{{$latestpost->featured_image}}" alt="">
                                        <div class="date">
                                        <strong>{{date('M',strtotime($latestpost->publish_date))}}</strong>
                                            <span>{{date('d',strtotime($latestpost->publish_date))}}</span>
                                        </div>
                                    </div>
                                    <ul class="post-meta">
                                    <li><a href="javascript:void(0)"><span class="icon fa fa-user"></span>by {{$latestpost->author->name}}</a></li>
                                        
                                    </ul>
                                    <h3>
                                    <a href="{{url('/blog/'.$latestpost->slug.'')}}">{{$latestpost->title}}</a>
                                    </h3>
                                    <div class="text">
                                       {!!substr($latestpost->body,0,300)!!}
                                    </div>
                                    <a href="{{url('/blog/'.$latestpost->slug.'')}}" class="btn-primary-line">Read More</a>
                                </div>
                            </div>
                            <!-- ***** Blog Post Big End ***** -->

                            @if (count($posts)>0)

                            @foreach ($posts as $post)
                               <!-- ***** Blog Post Standard Start ***** -->
                               <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="blog-post-thumb">
                                        <div class="img">
                                            <img src="{{$post->featured_image}}" alt="">
                                            <div class="date">
                                                <strong>{{date('M',strtotime($post->publish_date))}}</strong>
                                                <span>{{date('d',strtotime($post->publish_date))}}</span>
                                            </div>
                                        </div>
                                        <ul class="post-meta">
                                            <li><a href="#"><span class="icon fa fa-user"></span>by {{$post->author->name}}</a></li>
                                            
                                        </ul>
                                        <h3>
                                            <a href="{{url('/blog/'.$post->slug.'')}}">{{$post->title}}</a>
                                        </h3>
                                        <div class="text">
                                                {!!substr($post->body,0,300)!!}
                                        </div>
                                        <a href="{{url('/blog/'.$post->slug.'')}}" class="btn-primary-line">Read More</a>
                                    </div>
                                </div>
                                <!-- ***** Blog Post Standard End ***** -->
                                
                            @endforeach
                                
                            @else
                                <p>There are no posts Yet</p>
                            @endif

                         

                        </div>
                    </div>

                    <!-- ***** Pagination Start ***** -->
                    <nav>
                      
                        <ul class="pagination justify-content-center">
                                {{$posts->links()}}
                            
                        </ul>
                    </nav>
                    <!-- ***** Pagination End ***** -->
                </div>

                <!-- ***** Aside Start ***** -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <aside class="default-aside">
                        <div class="sidebar">
                            <div class="search-widget">
                                <div class="search">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <ul>
                                @if (count($tags)>0)

                                @foreach ($tags as $tag)

                            <li><a href="{{url('/blog/tag/'.$tag->slug.'')}}">{{$tag->name}} <span>{{count($tag->posts)}}</span></a></li>
                                    
                                @endforeach
                                    
                                @else
                                <p>there are no tags yet</p>
                                    
                                @endif
                                
                               
                            </ul>
                            <div class="home-services-item box active">
                                <h5 class="services-title">Tell us about your projects and we’ll get back to you with details on how we can make this work. Or just ask us anything mobile.</h5>
                                <a class="btn-white-line" href="#">Contact Us</a>
                            </div>
                           
                        </div>
                    </aside>
                </div>
                <!-- ***** Aside End ***** -->
            </div>
        </div>
    </div>
    <!-- ***** Page Content End ***** -->
</section>

<script data-ad-client="ca-pub-7673084103683337" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


@endsection