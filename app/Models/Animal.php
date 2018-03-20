<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $filliable = ['name', 'age', 'categorie_id', 'animal_type_id'];
    protected $table = 'animals';

    public function categories() {
        return $this->belongsTo('App\Models\Categorie');
    }
}
