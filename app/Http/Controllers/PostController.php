<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    //
    public function createPost(Request $request)
    {
        $request->validate(
            [
                'name'=>'required'
            ]);
            $post=Post::create($request->all());
            return response(['Created successfully']);
    }
    public function show($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['error' => 'Post not found']);
        }

        return response()->json($post);
    }
    public function display($id) {
        $post = Post::with('comments')->findOrFail($id);
        return response()->json($post);
    }
    

}
