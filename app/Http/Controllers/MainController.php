<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class MainController extends Controller
{
    public function mainView() {
        $categories = Categorie::get();
        return view('main', ['categories' => $categories]);
    }
     public function categoriesList($id) {
        $animals = Categorie::findOrFail($id)->animals;
        return view('listFromCategories', ['animals' => $animals]);
     }
}
