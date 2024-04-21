<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts() {
        $posts = Post::all();
        return view("posts", ['posts' => $posts]);
    }

    public function post_show($id) {
        $post = Post::findOrFail($id);
        return view('post_show', ['post'=> $post]);
    }
}
