<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'role' => 'バックエンド',
        'name' => 'フク',
        'skill' => 'php,laravel,docker,vagrant,git,GitHub'
    ];
});
