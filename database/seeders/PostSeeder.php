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
            'user_id' => 1, // Assuming user with ID 1 exists
            'title' => 'Sarlavha',
            'short_content' => 'This is a short content for the sample post.',
            'content' => 'This is the full content of the sample post. It contains detailed information about the topic discussed in the post.',
            'photo' => 'sample_photo.jpg',
        ]);

        Post::create([
            'user_id' => 1, // Assuming user with ID 1 exists
            'title' => 'Sarlavha 2',
            'short_content' => 'This is a short content for the sample post.',
            'content' => 'This is the full content of the sample post. It contains detailed information about the topic discussed in the post.',
            'photo' => 'sample_photo.jpg',
        ]);
    }
}
