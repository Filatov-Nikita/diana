<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPostsController extends Controller
{
  
    protected $rules;
    public function __construct()
    {
        $this->rules = [
            'maxSize' => 10 * 1024 * 1024,
            'minSize' => 10 * 1024,
            'allowedExt' => [
                'jpeg',
                'jpg',
                'png',
                'gif',
                'bmp',
                'tiff'
            ],
            'allowedMime' => [
                'image/jpeg',
                'image/png',
                'image/gif',
                'image/bmp',
                'image/tiff'
            ],
        ];

    }

    public function add() {
        $this->authorize('admin');
        return view('news.add');
    }

    public function addPost(RequestNewsCreate $request,  Uploader $uploader) {

        if ($uploader->validate($request, 'image', $this->rules)) {
            $uploadedPath = $uploader->upload();
        }

        $PostModel = Post::create($request->all());
        $PostModel->image = $uploadedPath;
        $PostModel->save();
        return redirect()->route('news.add')->with('successNewsCreate', 'Добавление поста выполнено успешно');

    }
}
