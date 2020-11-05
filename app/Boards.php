<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boards extends Model
{
    //protected $fillable = ['id','post_contents','post_body',];
    //protected $table = 'boards';

    public function thread() 
    {
        // 掲示板から見てスレッドへは「所属元」なのでbelongTo
        return $this->belongsTo('App\thread');
    }
}