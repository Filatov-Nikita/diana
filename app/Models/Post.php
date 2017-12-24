<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'news';
    protected $fillable = ['title', 'content'];

}
