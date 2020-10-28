<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = ['user_id','post_contents','post_body','comment',];
    protected $table = 'thread';

    public function post() {
        return $this->belongsTo('App\Post');
    }
}
