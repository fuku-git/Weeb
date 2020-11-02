<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boards; //

class BoardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('boards');
    }

    //{ 修正中
        //$Boards = boards::orderBy('create_at', 'desc')->get();
        //return view('bbs.boards', ['boards' => $boards]); //投稿を作成日時の降順で取得し bbs/boards.blade にデータを渡してビューを生成する内容
        //return view('boards');
    //}
}