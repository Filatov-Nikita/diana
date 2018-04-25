@extends('layouts.base')

@section('content')

    <div class="newsByone">
        <div class="wrapper">
            <div class="foto">
               <img src="{{url($animal->thumbnail)}}" alt="">
                <div class="items">
                    <div class="title">{{$animal->name}}</div>
                  <div class="date">{{articlesForamDate($animal->created_at)}}</div>
                </div>

            </div>
           <div class="content">
                {!! $animal->content !!}
            </div> 
        </div>
    </div>

    @endsection