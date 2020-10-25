<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function result()
    {

        // 値がある場合、キーワードと一致する値を取ってくる
        // resultに反映させる。変数の流れを理解する

        $posts = Post::orderBy('created_at','desc')->paginate(5);
        
        return view('posts.result',['posts' => $posts]);
    }

    public function serch(Request $request)
    {
        $search = $request->input('search');

        // 検索フォーム
        $query = DB::table('posts');

        $query->select('name','role','skill');
        $query->orderBy('created_at','desc');

        $request = $query->paginate(5);

        return view('serch',compact('request'));
    }
}