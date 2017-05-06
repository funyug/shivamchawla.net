<?php

namespace App\Http\Controllers\Api;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Request $request) {
        $validator = Validator::make($request->all(),[
           "comment"=>'required',
            "name"=>'required',
            "email"=>'required | email'
        ]);
        if($validator->fails()) {
            return ['success'=>0,'message'=>'Validation Failed','errors'=>$validator->errors()->all()];
        }

        $comment = new Comment();
        $comment->user_id = null;
        if(Auth::check()) {
            $comment->user_id = Auth::user()->id;
        }
        $comment->post_id = $request->post_id;
        $comment->comment = $request->comment;
        $comment->approved = true;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->save();
        return ['success'=>1,'message'=>"Comment Added"];
    }

    public function index(Request $request) {
        $validator = Validator::make($request->all(),[
            "comment"=>'required',
            "name"=>'required',
            "email"=>'required | email'
        ]);
        if($validator->fails()) {
            return ['success'=>0,'message'=>'Validation Failed','errors'=>$validator->errors()->all()];
        }

        $comments = Comment::wherePostId($request->post_id)->get();
        return ['success'=>1,'data'=>$comments];
    }
}
