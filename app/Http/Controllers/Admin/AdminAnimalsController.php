<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Animal_type;
use App\Models\Animal;
use App\Classes\Uploader;

class AdminAnimalsController extends Controller
{

    public function getAddAnimalForm() {
        $all_categories = Categorie::get();
        $all_animal_types = Animal_type::get();
        return view('animals.add', ['all_categories' => $all_categories, 'all_animal_types' => $all_animal_types]);
    }

    public function postAddAnimalForm(Request $request) {
        $add = Animal::create([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'thumbnail' => $request->file('thumbnail')->store('public'),
            'animal_type_id' => $request->input('animal_type'),
            'categorie_id' => $request->input('category'),
            'content' => $request->input('content')
        ]);
        return redirect()->route('listFromCategories', ['id' => $request->input('category')]);
    }
    public function addCategoryView() {
        return view('addCategory');
     }
     public function addCategoryPost(Request $request) {
         //dump($request->file('image'));
        Categorie::create([
            'name' => $request->input('name'),
            'img' => $request->file('image')->store('public')
        ]);
        return redirect()->route('main');
     }
    
}
