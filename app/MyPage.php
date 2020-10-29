<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyPage extends Model
{
    //usersテーブルにマッピング
    protected $table = 'users';

    protected $fillable = [
        'user_name',
        'user_email',
        'icon',
        'role',
        'skill',
        'portfolio',
    ];

}
