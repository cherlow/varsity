<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;
use Wink\WinkPage;
use Wink\WinkPost;
use Wink\WinkTag;

class PagesController extends Controller
{
// index page here
  public function index(){
    $posts = WinkPost::with('tags')
    ->live()
    ->orderBy('publish_date', 'DESC')
    ->take(3)->get();
    return view('pages.index')->with('posts',$posts);
  }

  // our works page hereh

  public function ourworks(){

    $works= Work::orderBy('id','desc')->get();
  


    return view('pages.ourworks')->with('works',$works);
  }

  // about page here

  public function about(){

    return view('pages.about');
  }
  // services page here

  public function services(){
    return view('pages.services');
  }

  public function blog(){
    $posts = WinkPost::with('tags')
    ->live()
    ->orderBy('publish_date', 'DESC')
    ->paginate(4);
    

    // return $posts;

   $tags=WinkTag::with('posts')->get();
  //  return $tags;


  

$latestpost= WinkPost::live()->orderBy('publish_date','desc')->take(1)->first();

// return $latestpost;

$breadcrumb=' <ol class="breadcrumb">
<li><a href="/">Home</a></li>
<li class="active">Blog</li>
</ol>';

return view('pages.blog')->with('latestpost',$latestpost)->with('posts',$posts)->with('tags',$tags)->with('breadcrumb',$breadcrumb);
  }

  public function blogtag($tag){
    // return $tag;
    $tagee= WinkTag::where('slug',$tag)->first();
    // return $posts= WinkPost::where('tag_id',$tagee->id)->paginate(4);
    $posts=$tagee->posts()->live()->orderBy('publish_date','desc')->paginate(4);
    $latestpost=$tagee->posts->first();
    $tags=WinkTag::with('posts')->get();

    $breadcrumb=' <ol class="breadcrumb">
<li><a href="/">Home</a></li>
<li><a href="/blog">Blog</a></li>
<li class="active">'.$tagee->name.'</li>
</ol>';

    return view('pages.blog')->with('latestpost',$latestpost)->with('posts',$posts)->with('tags',$tags)->with('breadcrumb',$breadcrumb);


  }

  public function singleblog($slug){

     $post = WinkPost::with('tags')
    ->live()
    ->where('slug',$slug)->first();
    $tags=WinkTag::with('posts')->get();
    
    return view('pages.singleblog')->with('post',$post)->with('tags',$tags);
  }

  public function singleworks($slug){
    $work=Work::where('slug',$slug)->first();
    return view('pages.singleworks')->with('work',$work);
  }
}
