<?php

namespace App\Http\Controllers\Pages;

use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    public function index() {
        $featured_posts = Post::where('featured',1)->orderBy('created_at','desc')->take(3)->get();
        $posts = Post::orderBy('created_at','desc')->take(6)->get();
        return view('pages.home',compact('posts','featured_posts'));
    }
}
