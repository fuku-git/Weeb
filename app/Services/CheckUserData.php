<?php

namespace App\Services;


class CheckUserData
{
    public static function checkAuthority($data){
        if($data->authority === 1){
            $authority = '運営';
        }
        if($data->authority === ２){
            $gender = 'USER';
        }

        return $authority;

    }

    public static function checkRole($data){
        if($data->role === 1){
            $role = 'フロントエンド';
        }
        if($data->role === 2){
            $role = 'バックエンド';
        }
        if($data->role === 3){
            $role = 'インフラ';
        }
        if($data->role === 4){
            $role = 'デザイナー';
        }

        return $role;

    }
}
