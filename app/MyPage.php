<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyPage extends Model
{
    //usersテーブルにマッピング
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'icon',
        'role',
        'skill',
        'portfolio',
    ];

}
