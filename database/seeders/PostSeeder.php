<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Первый пост',
            'content' => 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum',
            'description' => 'Lorem ipsum',
            'is_published' => true,
        ]);
        Post::create([
            'title' => 'Второй пост',
            'content' => 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum',
            'description' => 'Lorem ipsum',
            'is_published' => true,
        ]);
        Post::create([
            'title' => 'Третий пост',
            'content' => 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum',
            'description' => 'Lorem ipsum',
            'is_published' => true,
        ]);
    }
}
