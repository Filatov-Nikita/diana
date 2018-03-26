@extends('layouts.base')

@section('categories')
    <div class = "categories">
        <div class="wrapper">
           <div class="listCategories">
               <ul>
                   @foreach($typesAnimal as $typeAnimal)
                        <li>
                             <a href="{{route('animals.sortByCategory', ['type_animal_id' => $typeAnimal])}}">{{$typeAnimal->name}}</a>
                        </li>
                   @endforeach
               </ul>
           </div>
        </div>
    </div> <br>
@endsection