@extends('layouts.app')
@section('content')

    <div class="container center">
        @if(count($featured_posts) == 3)
        <div class="featured-posts clearfix">
            <div class="col-md-6 slider-div">
                <a href="/post/{{$featured_posts[0]->slug}}">
                    <img src="/storage/{{$featured_posts[0]->thumbnail("medium")}}" class="slider-img-big"/>
                    <p class="post-title">{{$featured_posts[0]->title}}</p>
                </a>
            </div>
            <div class="col-md-6 slider-div">
                <div class="col-md-12 slider-div">
                    <a href="/post/{{$featured_posts[1]->slug}}">
                        <img src="/storage/{{$featured_posts[1]->thumbnail("medium")}}" class="slider-img-small"/>
                        <p class="post-title">{{$featured_posts[1]->title}}</p>
                    </a>
                </div>
                <div class="col-md-12 slider-div">
                    <a href="/post/{{$featured_posts[2]->slug}}">
                        <img src="/storage/{{$featured_posts[2]->thumbnail("medium")}}" class="slider-img-small"/>
                        <p class="post-title">{{$featured_posts[2]->title}}</p>
                    </a>
                </div>
            </div>
        </div>
        @endif
        <div class="section">
            <h1 class="center">Posts</h1>
            <hr class="divider-line" />
            <div class="posts clearfix">
                @foreach($posts as $post)
                <a href="/post/{{$post->slug}}">
                <div class="col-md-6 post">
                    <div class="col-md-4 post-image">
                        <img src="/storage/{{$post->thumbnail("small")}}">
                    </div>
                    <div class="col-md-8">
                        <h1 class="post-title">{{$post->title}}</h1>
                        <p class="post-excerpt">{{$post->excerpt}}</p>
                    </div>
                </div>
                </a>
                @endforeach
            </div>
            <div>
                <p class="more-button"><a href="/posts"><u>More Posts</u></a></p>
            </div>
        </div>

    </div>

@stop