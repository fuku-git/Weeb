<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Post;
use App\MyPage;
use App\User;

class UserRegisterController extends Controller
{
    public function index()
    {
        return view('userregist');
    }

    public function store(Request $request)
    {
        //dd($request);

        $params = $request->validate([
            'user_id'=>'required|max:20',
            'user_name'=>'required|max:191',
            'user_email'=>'required|max:191',
            'user_email2'=>'required|max:191',
            'pass'=>'required|max:191',
            'pass2'=>'required|max:191',
            'skill'=>'required|max:191'
        ]);
        
        $default =["authority" => 2, "role" => 1];
        $params = $params + $default;

        //dd($params);

        User::create($params);

        return redirect()->route('top');
    }
}
