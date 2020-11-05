<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    //protected $fillable = ['user_id','post_contents','post_body','comment',];
    //protected $table = 'thread';

    public function boards()
    {
        // スレッドは一つの投稿に所属する
        return $this->belongsTo('App\boards');
    }
}
