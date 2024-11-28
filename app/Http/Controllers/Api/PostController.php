<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function all()
    {
        return response()->json(Post::all(10));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Post::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        return response()->json(Post::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json($post);
    }

    public function slug(string $slug)
    {
        $category = Post::where('slug', $slug)->firstOrFail();
        return response()->json($category);
    }
    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Post $post)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
        $post->update($request->validated());
        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json('OK');
    }
}
