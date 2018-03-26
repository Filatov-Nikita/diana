<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Animal_type;
use App\Models\Animal;

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
            'animal_type_id' => $request->input('animal_type'),
            'categorie_id' => $request->input('category'),
        ]);
    }

    
}
