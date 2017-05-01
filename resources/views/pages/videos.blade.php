@extends('layouts.app')
@section('content')

    <div class="section">
        <h1 class="center">Videos</h1>
        <hr class="divider-line" />
        <div class="posts clearfix">
            @foreach($videos as $video)
                <div class="col-md-6 post">
                    <a href="/videos/{{$video->slug}}">
                        <div class="col-md-4 post-image">
                            <img src="https://img.youtube.com/vi/{{$video->video_id}}/0.jpg">
                        </div>
                        <div class="col-md-8">
                            <h1 class="post-title">{{$video->title}}</h1>
                            <p class="post-excerpt">{{$video->excerpt}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
            <div>
                {!! $videos->render() !!}
            </div>
        </div>
    </div>

@stop