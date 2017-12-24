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

    public function newsByOne($id) {
        $post = Post::findOrFail($id);
        return view('newsByOne', ['post' => $post]);
    }

}
