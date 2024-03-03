<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'name' => 'Example Post',
            'email' => 'example@example.com',
            'sex' => 'Female',
            'phone' => '9876543210',
            'section' => 'Fashion',
            'respond' => 'This is an example response.',
            'content' => 'This is an example content.',
            'status' => true,
            'age' => 25,
        ]);
    }
}
