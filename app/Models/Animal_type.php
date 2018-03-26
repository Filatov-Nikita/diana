<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal_type extends Model
{
    protected $table = 'animal_types';
    protected $fillable = ['name'];


    public function animals() {
        return $this->hasMany('App\Models\Animal');
    }
}
