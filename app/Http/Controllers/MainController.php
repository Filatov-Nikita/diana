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
        $typesAnimal = Animal_type::get();
        $animals = Categorie::findOrFail($id)->animals;
        return view('listFromCategories', ['animals' => $animals, 'typesAnimal' => $typesAnimal]);
     }

}
