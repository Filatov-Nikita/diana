<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Post;
use App\Models\Animal_type;

class MainController extends Controller
{
    public function mainView() {
        $categories = Categorie::get();
        $posts = Post::limit(3)->get();
        return view('main', ['categories' => $categories, 'posts' => $posts]);
    }
     public function categoriesList($id) {
        session(['category_id' => $id]);
        $typesAnimal = Animal_type::get();
        $animals = Categorie::findOrFail($id)->animals;
        return view('listFromCategories', ['animals' => $animals, 'typesAnimal' => $typesAnimal]);
     }

     public function sortAnimalsByCategory($type_animal_id) {
        $category_id = session('category_id');
        $resSort = Categorie::findOrFail($category_id)->animals->where('animal_type_id', $type_animal_id);

        //dump($resSort);
        return view('sortAnimalByCategory', ['animals' => $resSort]);
     }

}
