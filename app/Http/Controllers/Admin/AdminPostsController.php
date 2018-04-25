<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RequestNewsCreate;
use App\Models\Post;

class AdminPostsController extends Controller
{
  
    public function add() {
        $this->authorize('admin');
        return view('news.add');
    }

    public function addPost(RequestNewsCreate $request) {

        $PostModel = Post::create([
            'title' => $request->input('title'),
            'image' =>  $request->file('image')->store('public'),
            'content' => $request->input('content')
        ]);
        return redirect()->route('news.add')->with('successNewsCreate', 'Добавление поста выполнено успешно');

    }
}
