@extends('layouts.base')

@section('content')

    <div class="newsByone">
        <div class="wrapper">
            <div class="foto">
                {{--  <img src="{{upload_path($post->image)}}" alt="">  --}}
                <div class="items">
                    <div class="title">{{$animal->name}}</div>
                    {{--  <div class="date">{{articlesForamDate($post->created_at)}}</div>  --}}
                </div>

            </div>
            {{--  <div class="content">
                {!! $animal->content !!}
            </div>  --}}
        </div>
    </div>

    @endsection