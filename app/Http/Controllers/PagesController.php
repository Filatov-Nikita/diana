<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function news() {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        return view('news', ['posts' => $posts]);
    }
}
