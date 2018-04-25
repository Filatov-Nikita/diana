@extends('layouts.base')
@section('content')
    <div class="news_main">
        <div class="wrapper">
            <div class="blocks">
                <div class="container">
                    @foreach($posts as $post)
                        @include('parts.post')
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @endsection
