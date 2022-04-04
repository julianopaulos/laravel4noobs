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

    public function postBlogPost(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required|exists:user,id',
        ]);

        $data = $request->only(['title', 'content', 'user_id']);
        $data['published'] = $request->has('published') ? true : false;

        Post::create($data);

        return redirect('posts');
    }
}
