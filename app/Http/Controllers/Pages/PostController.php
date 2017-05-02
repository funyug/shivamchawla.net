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
        $post = Post::where('slug',$slug)->first();
        if($post == null) {
            abort(404);
        }
        $title = $post->title;
        return view('pages.post',compact('post','title'));
    }
}
