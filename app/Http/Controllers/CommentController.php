<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentStoreRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentStoreRequest $request)
    {
        $data = $request->validated();

//        $comment = new Comment();
//        $comment->user_id = auth()->user()->id;
//        $comment->content = $data['content'];
//        $comment->post_id = $data['post_id'];
//        $comment->save();
//        return response()->redirectToRoute('posts.show', $data['post_id']);

        Comment::query()->create([
            'user_id' => auth()->user()->id,
            'content' => $data['content'],
            'post_id' => $data['post_id'],
        ]);

        return redirect()->route('posts.show', $data['post_id']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $postId = $comment->post_id;
        $comment->delete();
        return redirect()->route('posts.show', $postId);
    }
}
