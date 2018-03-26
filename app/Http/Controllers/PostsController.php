<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Uploader;
use App\Models\Post;
use App\Http\Requests\RequestNewsCreate;

class PostsController extends Controller
{
    public function listPosts() {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        return view('posts', ['posts' => $posts]);
    }

    public function postById($id) {
        $post = Post::findOrFail($id);
        return view('postById', ['post' => $post]);
    }

}
