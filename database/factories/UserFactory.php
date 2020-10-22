<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'user_name' => $faker->userName,
        'user_email' => $faker->unique()->safeEmail,
        'pass' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'icon'=> $faker->image,
        'authority'=>$faker->randomElement([1,2]),
        'role'=>$faker->randomElement([1,2,3,4]),
        'skill'=>$faker->realText(30),
        'portfolio'=>$faker->url,
        'created_at'=>$faker->dateTime(),
        'updated_at'=>$faker->dateTime(),
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
    ];
});

