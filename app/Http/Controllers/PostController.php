<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::paginate(15);
        return view('pages.posts',compact('posts'));
    }

    public function show($slug) {
        return view('pages.post');
    }
}
