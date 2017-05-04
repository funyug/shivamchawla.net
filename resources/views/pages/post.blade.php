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
        <div class="fb-share-button" data-href="{{url('/post/'.$post->slug)}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/post/'.$post->slug)}}&amp;src=sdkpreparse">Share</a></div>
        <a class="twitter-share-button" data-show-count="false">Tweet</a>
    </div>
    <div class="comments" ng-app="commentApp" ng-controller="comment_controller">
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
                    <textarea ng-model="data.comment" placeholder="Write a comment"></textarea>
                    <br>
                    <input type="text" placeholder="Name" ng-model="data.name">
                    <input type="email" placeholder="Email" ng-model="data.email">
                    <button class="btn btn-primary btn-post-comment" ng-click="postComment()">Post Comment</button>
                </div>
            </div>
        </div>
    </div>

</div>

@stop