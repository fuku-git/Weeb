<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boards;

class BoardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $boards = boards::orderBy('created_at', 'desc')->get();
        return view('bbs.boards', ['boards' => $boards]); //投稿を作成日時の降順で取得し bbs/boards.blade にデータを渡してビューを生成する内容
    }

    public function create()
    {
        echo "create"; //@TODO 投稿処理を行う
    }
}