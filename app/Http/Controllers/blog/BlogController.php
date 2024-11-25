<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class BlogController extends Controller
{
    function index() {
        $posts = Post::paginate(2);
        return view('blog.index', compact('posts'));
    }

    function show(Post $post) {
        // @dd('Cargando blog.show con post:', $post);
        return view('blog.show', ['post'=>$post]);
    }
}
