<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    public function getAddForm() {
        return view('animals.add');
    }
}
