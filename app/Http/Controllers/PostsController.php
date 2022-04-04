<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function getPosts(){
        #$posts = Post::all();
        $posts = Post::paginate(15);
        return response()->json(array('posts' => $posts));
    }

    public function getPost(Post $post){
        return response()->json(array('post' => $post));
    }
}
