@extends('layouts.base')
@section('content')
    <div class="news_main">
        <div class="wrapper">
            <div class="blocks">
                <div class="container">
                    @foreach($posts as $post)
                    <div class="item">
                        <div class="top_line">
                        </div>
                        <a  href = "" class="foto">
                            <div class="black">
                                <div class="text">
                                    {{$post->title}}
                                </div>
                                <div class="date">
                                    {{articlesForamDate($post->created_at)}}
                                </div>
                            </div>
                            <img src="{{upload_path($post->image)}}" alt="">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @endsection
