<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // session(['key'=> 'value']);
        session()->flush();
        $posts = Post::paginate(8);

        return view('dashboard/post/index', compact('posts'));
        // $post = Post::find(1)->delete();

        // $post = Post::find(2);
        // $category = Category::find(1);
        // dd($category->posts[0]->title);
        // $post->delete();

        // dd($post);

        // $post->update(
        //     [
        //         'title' => 'test title new',
        //         'slug' => 'test slug new',
        //         'content' => 'test content',
        //         'posted' => 'not',
        //         'image' => 'test image'
        //     ]
        // );

        // dd($post);

        // Post::create(
        //     [
        //         'title' => 'test title new',
        //         'slug' => 'test slug new',
        //         'content' => 'test content',
        //         'category_id' => 1,
        //         'description' => 'test description',
        //         'posted' => 'not',
        //         'image' => 'test image'
        //     ]
        // );

        // return ('Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('id', 'title');
        $post = new Post();

        // dd($post);

        return view('dashboard.post.create', compact('categories', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        Post::create($request->validated());
        return to_route('dashboard.post.index')->with('status','Post Created');

        // $validated = Validator::make($request->all(),
        //     [
        //         'title' => 'required|min:5|max:500',
        //         'slug' => 'required|min:5|max:500',
        //         'content' => 'required|min:7',
        //         'category_id' => 'required|integer',
        //         'description' => 'required|min:7',
        //         'posted' => 'required',
        //     ]
        //     );

        // dd($validated->errors());

        // $request->validate([
        //     'title' => 'required|min:5|max:500',
        //     'slug' => 'required|min:5|max:500',
        //     'content' => 'required|min:7',
        //     'category_id' => 'required|integer',
        //     'description' => 'required|min:7',
        //     'posted' => 'required',
        // ]);

        // echo 'not validate';
        
        

        //dd(request()->get('title'));
        //dd($request->all());

        // Post::create(
        //     [
        //         'title' => $request->all()['title'],
        //         'slug' => $request->all()['slug'],
        //         'content' => $request->all()['content'],
        //         'category_id' => $request->all()['category_id'],
        //         'description' => $request->all()['description'],
        //         'posted' => $request->all()['posted'],
        //         // 'image' => $request->all()['image'],
        //     ]
        // );

        // dd(request()->get('title'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard/post/show', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id', 'title');
        return view('dashboard.post.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
        // dd(public_path('upload/posts'));
        $data = $request->validated();
        // image
        if (isset($data['image'])){
            $data['image'] = $filename = time().'.'.$data['image']->extension();
            $request->image->move(public_path('upload/posts'), $filename);
        }

    
        // image

        $post->update($data);
        return to_route('post.index')->with('status','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index')->with('status','Post Deleted');
    }
}
