<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boards extends Model
{
    protected $fillable = ['id','post_contents','post_body',];
    protected $table = 'boards';

    public function post() { //再確認
        return $this->belongsTo('App\Post');
    }
}