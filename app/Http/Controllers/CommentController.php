<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CommentController extends Controller
{
    //
    public function createComment(Request $request)
    {
        $request->validate([
            'post_id'=>'required',
            'comment'=>'required'
        ]);
        $comment=Comment::create($request->all())->get();
        return response(['comment created successfully']);
    }
    public function show($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json(['error' => 'Post not found.'], 404);
        }

        return response()->json($comment);
    }
    
}
