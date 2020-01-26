@extends('layouts.pageslayout')
@section('content')

<script data-ad-client="ca-pub-7673084103683337" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover" data-image="/assets/images/photos/parallax.jpg">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <h1>{{$post->title}}</h1>
                    </div>
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="/blog">Blog</a></li>
                            <li class="active"></li>
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
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-post-thumb big mbottom-60">
                                <!-- ***** Post Top Start ***** -->
                                <div class="img">
                                    <img src="{{$post->featured_image}}" alt="">
                                    <div class="date">
                                        <strong>{{date('M',strtotime($post->publish_date))}}</strong>
                                        <span>{{date('d',strtotime($post->publish_date))}}</span>
                                    </div>
                                </div>
                                <ul class="post-meta mbottom-20">
                                    <li><a href="javascript:void(0)"><span class="icon fa fa-user"></span>by {{$post->author->name}}</a></li>
                                    
                                </ul>
                                <!-- ***** Post Top End ***** -->

                                <!-- ***** Post Content Start ***** -->
                                <div class="text post-detail">
                                        {!!$post->body!!}

                                        
                                    
                                </div>
                                <!-- ***** Post Content End ***** -->

                                

                                <!-- ***** Post Share Start ***** -->
                                <div class="post-footer">
                                    <span>Share - </span>
                                    <ul class="share">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                        
                                    </ul>
                                </div>
                                <!-- ***** Post Share End ***** -->






                            </div>
                        </div>

                        <div class="col-lg-12">
								<div class="section-comments">
									
									<ul class="">
                                    <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = '{{Request::url()}}';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = '{{$post->id}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://hustlance.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
										
									</ul>
								</div>
							</div>

                      

                      
                    </div>
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
                            <div class="widget-tags">
                                @if (count($post->tags)>0)
                                @foreach ($post->tags as $tag)
                            <a href="{{url('/blog/tag/'.$tag->slug.'')}}">{{$tag->name}}</a>
                                    
                                @endforeach
                                    
                                @else
                                   <b><i>This post has no tags</i></b> 
                                @endif
                                
                               
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