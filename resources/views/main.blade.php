@extends('layouts.base')
@section('content')
    <div class="two_panel">
        <div class="wrapper">
            <div class="container">
                <div class="left_panel">
                    @include('parts.lastNews')
                    @can('admin')
                      @include('parts.adminMenu')
                    @endcan
                </div>
                <div class="right_panel">
                    <div class="top">
                          @include('parts.slider')
                    </div>
                    <div class="blocks">
                        <div class="container">
                            @foreach($categories as $categorie)
                            <div class="item">
                                <div class="top_line">
                                </div>
                                    <a  href = "{{route('listFromCategories', ['id' => $categorie->id])}}" class="foto">
                                    <div class="black">
                                        <div class="text">
                                            {{$categorie->name}}
                                        </div>
                                    </div>
                                    <img src="{{url('public' . $categorie->img)}}" alt="">
                                </a>
                          </div>
                          @endforeach
                     </div>
                </div>
            </div>
         </div>
    </div>


@endsection