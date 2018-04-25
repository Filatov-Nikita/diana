<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['name', 'thumbnail', 'age', 'content' ,'categorie_id', 'animal_type_id'];
    protected $table = 'animals';

    public function categorie() {
        return $this->belongsTo('App\Models\Categorie');
    }

    public function animal_type() {
        return $this->belongsTo('App\Models\Animal_type');
    }
}
