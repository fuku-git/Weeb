<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'role' => 'バックエンド',
                'name' => 'fuku',
                'skill' => 'php,laravel,docker,vagrant,git,GitHub',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'role' => 'バックエンド',
                'name' => 'ぽぽ',
                'skill' => 'php,laravel,docker,vagrant,git,GitHub',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'role' => 'バックエンド',
                'name' => 'sudo',
                'skill' => 'php,laravel,docker,vagrant,git,GitHub',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'role' => 'バックエンド',
                'name' => 'hiyoko',
                'skill' => 'php,laravel,docker,vagrant,git,GitHub',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'role' => 'バックエンド',
                'name' => 'task',
                'skill' => 'php,laravel,docker,vagrant,git,GitHub',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'role' => 'バックエンド',
                'name' => 'フナ',
                'skill' => 'php,laravel,docker,vagrant,git,GitHub',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
