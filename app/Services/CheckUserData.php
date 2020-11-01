<?php

namespace App\Services;


class CheckUserData
{
    public static function checkAuthority($data){
        if($data->authority === 1){
            $authority = '運営';
        }
        if($data->authority === ２){
            $authority = 'USER';
        }

        return $authority;

    }

    public static function checkRole($data){
        if($data->role === 1){
            $role = 'フロントエンドエンジニア';
        }
        if($data->role === 2){
            $role = 'バックエンドエンジニア';
        }
        if($data->role === 3){
            $role = 'インフラエンジニア';
        }
        if($data->role === 4){
            $role = 'デザイナー';
        }

        return $role;

    }
}
