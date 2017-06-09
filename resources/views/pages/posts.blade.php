@extends('layouts.app')
@section('content')

    <div class="section">
        <h1 class="center">Guides</h1>
        <hr class="divider-line" />
        <div class="posts clearfix">
            @foreach($posts as $post)
                <div class="col-md-6 post">
                    <a href="/post/{{$post->slug}}">
                        <div class="col-md-4 post-image">
                            <img src="/storage/{{$post->image}}">
                        </div>
                        <div class="col-md-8">
                            <h1 class="post-title">{{$post->title}}</h1>
                            <p class="post-excerpt">{{$post->excerpt}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
            <div>
               {!! $posts->render() !!}
            </div>
        </div>
    </div>

@stop