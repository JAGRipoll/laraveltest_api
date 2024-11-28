<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\PutRequest;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function all()
    {
        return response()->json(Category::all(10));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Category::paginate(10));
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
        // Category::create($request->validated());
        return response()->json(Category::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response()->json($category);
    }

    public function slug(Category $category)
    {
        // $category = Category::where('slug', $slug)->firstOrFail();
        return response()->json($category);
    }
    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Category $category)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Category $category)
    {
        $category->update($request->validated());
        return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json('OK');
    }
}
