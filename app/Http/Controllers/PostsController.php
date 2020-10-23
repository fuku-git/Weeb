<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        
        return view('serch',['posts' => $posts]);
    }

    public function result()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        
        return view('posts.result',['posts' => $posts]);
    }
}
