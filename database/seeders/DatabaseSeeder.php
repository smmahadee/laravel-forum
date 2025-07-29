<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();
        $posts = Post::factory(200)->recycle($users)->create();
        $comments = Comment::factory(300)->recycle($users, $posts)->create();

        User::factory()->has(Post::factory(100))->has(Comment::factory(150)->recycle($posts))->create([
            'name' => 'Mahadee Hasan',
            'email' => 'mahadee@mobypay.my',
            'password' => bcrypt('password'), // Ensure to hash the password
        ]);
    }
}
