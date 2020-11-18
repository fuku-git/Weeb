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
            'id'=>'required|max:20',
            'name'=>'required|max:191',
            'email'=>'required|max:191',
            'conf_email'=>'required|max:191',
            'password'=>'required|max:191',
            'conf_password'=>'required|max:191',
            'skill'=>'required|max:191'
        ]);
        
        $default =["authority" => 2, "role" => 1];
        $params = $params + $default;

        //dd($params);

        User::create($params);

        return redirect()->route('login');
    }
}
