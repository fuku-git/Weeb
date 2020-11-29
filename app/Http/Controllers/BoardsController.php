<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boards;
use Validator;
//use App\Http\Requests\BoardsRequest;

class BoardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $boards = boards::orderBy('created_at', 'desc')->get();
        return view('bbs.boards', ['boards' => $boards]);
    }


        //投稿フォーム
        public function create(Request $request){
        $input = $request->only('name','post_contents','post_body');
        
        $validaitor = Validator::make($input, [
            'name' => 'required|string|max:30',
            'post_contents' => 'required|string|max:30',
            'post_body' => 'required|string|max:500'
        ]);

        //バリデーション失敗
        if($validaitor->fails()){
            return redirect('boards')
            ->withErrors($validaitor);
        }

        //バリデーション成功
        $entry = new Boards();
        $entry->name = $input["name"];
        $entry->post_contents = $input["post_contents"];
        $entry->post_body = $input["post_body"];
        $entry->save();
        return redirect('boards');
    }

        //投稿の詳細表示
        public function show($id){
        $boards = Boards::where('id', '=', $id)
            ->first();
        return view('bbs.thread')
            ->with('boards', $boards);
        }
}