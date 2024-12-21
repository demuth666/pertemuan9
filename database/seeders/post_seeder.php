<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class post_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Post::create([
                'user_id' => 2,
                'title' => 'Post pertama',
                'content' => 'ini adalah content pertama'
            ]);
    }
}
