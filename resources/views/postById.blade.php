@extends('layouts.base')

@section('content')

    <div class="newsByone">
        <div class="wrapper">
            <div class="foto">
                <img src="{{url('public/' . $post->image)}}" alt="">
                <div class="items">
                    <div class="title">{{$post->title}}</div>
                    <div class="date">{{articlesForamDate($post->created_at)}}</div>
                </div>

            </div>
            <div class="content">
                {!! $post->content !!}
            </div>
        </div>
    </div>

    @endsection