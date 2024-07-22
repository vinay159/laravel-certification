<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __constructor()
    {
    }

    public function createPost(Request $request)
    {
        $inputFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $inputFields['title'] = strip_tags($inputFields['title']);
        $inputFields['content'] = strip_tags($inputFields['content']);
        $inputFields['user_id'] = auth()->id();

        Post::create($inputFields);

        return redirect('/');
    }
}
