<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|Application|View
    {
        $posts = Post::query()->without('comments')->where('is_published','=',true)->get();

//        return view('posts', ['posts' => $posts]);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->input();

        $post = Post::create([
            'title' => '',
            'content' => '',
            'description' => '',
            'is_published' => true,
        ]);

        $post->update($data);
        $post->save();

        return redirect()->route('posts.index', $post);
    }

//    /**
//     * Display the specified resource.
//     */
//    public function show(Post $post): Factory|Application|View|string
//    {
//        return $post->is_published ? \view('posts.show', compact('post')): 'Нет такого поста';
//    }
    public function show(Post $post): Factory|Application|View
    {
        if (!$post->is_published) {
            abort(ResponseAlias::HTTP_NOT_FOUND);
//            abort(404);
        }

        return \view('posts.show', compact('post'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post): Factory|Application|View
    {
        return \view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        $data = $request->validated();
        $post->update($data);
        return response()->redirectToRoute('posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->redirectToRoute('posts.index');
    }
}
