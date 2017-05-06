@extends('layouts.app')

@section('content')
<div class="container center" ng-init="post_id = {{$post->id}}">

    <div class="article-heading">
        <h1>{{$post->title}}</h1>
        <p>By {{$post->authorId->name}} on {{date('M d, Y',$post->created_at->timestamp)}}</p>
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
    <div class="comments" ng-controller="comment_controller" ng-init="comments_count = {{count($comments)}}">
        <p>@{{comments_count}} Comments</p>
        <div class="comments-div clearfix">
            @foreach($comments as $comment)
            <div class="single-comment clearfix">
                <div class="col-md-1 avatar-image">
                    <img src="http://gravatar.com/avatar/{{md5($comment->email)}}">
                </div>
                <div class="col-md-11">
                    <p>@if($comment->user){{$comment->user->name}}@else{{$comment->name}}@endif - <span>{{$comment->created_at->diffForHumans()}}</span></p>
                    <p>{{$comment->comment}}</p>
                </div>
            </div>
            @endforeach
            <div class="single-comment clearfix" ng-repeat="comment in comments">
                <div class="col-md-1 avatar-image">
                    <img src="http://gravatar.com/avatar/0000000000">
                </div>
                <div class="col-md-11">
                    <p>@{{ comment.name }}</p>
                    <p>@{{comment.comment}}</p>
                </div>
            </div>
            <div class="write-comment">
                <p class="error" ng-repeat="error in errors">@{{ error }}</p>
                <div class="col-md-1 avatar-image">

                </div>
                <div class="col-md-11 input-field">
                    <textarea ng-model="data.comment" placeholder="Write a comment"></textarea>
                    <br>
                    <input type="text" placeholder="Name" ng-model="data.name">
                    <input type="text" placeholder="Email" ng-model="data.email">
                    <button class="btn btn-primary btn-post-comment" ng-click="postComment()">Post Comment</button>
                </div>
            </div>
        </div>
    </div>

</div>

@stop