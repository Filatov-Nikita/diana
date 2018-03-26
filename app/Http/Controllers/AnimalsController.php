<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalsController extends Controller
{
    public function getAddForm() {
        return view('animals.add');
    }
    public function detailAnimal($id) {
        $animal = Animal::findOrFail($id);
        return view('detailAnimal', ['animal' => $animal]);
    }
}
