<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

// use Illuminate\Support\Facades\DB;
// use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function layout()
    {
        return view('layout');
    }

    public function serch()
    {
        return view('serch');
    }

    // public function result()
    // {

    //         $posts = \Post::orderBy('created_at','desc')->paginate(5);
        
    //     return view('posts.result',['posts' => $posts]);
    // }
    //  値がある場合、キーワードと一致する値を取ってくる
    //  resultに反映させる。変数の流れを理解する
    // →下のコードは変数があってない（定義されてない？）ということ

    // ->Postというモデルを使ってデータベースからデータを取得して、
    // そのデータをビュー（index.blade.php）へと渡してます
    // ??ModelでEloquent使ってコントローラーでクエリビルダーになってるけど問題ない？
    // bladeのviewの中にもデータを呼び出す記述が足りないのか？

    public function result(Request $request)
    {
        $posts = Post::all();
        // dd($posts);

        $role = $request->input('role');
        $name = $request->input('name');
        $skill = $request->input('skill');

        // $request->input('role','name','skill');

        // 検索フォーム
        $query = \DB::table('posts');

        $query->select('name','role','skill');
        $query->orderBy('created_at','desc');

        $request = $query->paginate(5);

        return view('posts.result',compact('posts'));
    }

        // posts.resultに$role,$name,$skill を使った処理を書いて検索結果を表示
        // →検索結果に応じてviewで表示させる
}