<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Category;

class CategoryController extends Controller
{
    public function show($slug) {
        $category = Category::where('slug',$slug)->first();
        if($category == null) {
            abort(404);
        }
        $posts = $category->posts()->paginate(16);
        return view('pages.category',compact('category','posts'));
    }
}
