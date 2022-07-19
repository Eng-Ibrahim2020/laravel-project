<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        // $posts = Post::all();
        $posts = Post::orderby('id')->paginate(25);
        // $posts = Post::simplePaginate(25);
        return view('posts.index', compact('posts'));
    }
}
