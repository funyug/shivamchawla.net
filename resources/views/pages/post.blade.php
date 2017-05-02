@extends('layouts.app')

@section('content')
<div class="container center">

    <div class="article-heading">
        <h1>{{$post->title}}</h1>
        <p>By Shivam Chawla on February 3rd,2017</p>
    </div>
    <div class="col-md-12 article-image">
        <img src="/storage/{{$post->image}}">
    </div>
    <div class="article-content">
        {!! $post->body  !!}
    </div>
    <div class="share-buttons">
        <button class="btn btn-primary">FShare</button>
        <button class="btn btn-primary">Tweet</button>
        <button class="btn btn-primary">GShare</button>
    </div>
    <div class="comments">
        <p>0 Comments</p>
        <div class="comments-div clearfix">
            <div class="single-comment clearfix">
                <div class="col-md-1 avatar-image">
                    <img src="http://dotageeks.com/wp-content/uploads/2015/06/Pugna-Dota-2-Wallpaper-31.jpg">
                </div>
                <div class="col-md-11">
                    <p>Shivam Chawla - <span>2 Days Ago</span></p>
                    <p>Awesome post. Great work</p>
                </div>
            </div>
            <div class="write-comment">
                <div class="col-md-1 avatar-image">
                    <img src="http://dotageeks.com/wp-content/uploads/2015/06/Pugna-Dota-2-Wallpaper-31.jpg">
                </div>
                <div class="col-md-11 input-field">
                    <textarea placeholder="Write a comment"></textarea>
                    <button class="btn btn-primary btn-post-comment">Post Comment</button>
                </div>
            </div>
        </div>
    </div>

</div>

@stop