<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'name' => 'Example Blog',
            'email' => 'example@example.com',
            'sex' => 'Male',
            'phone' => '1234567890',
            'section' => 'Technology',
            'respond' => 'This is an example response.',
            'content' => 'This is an example content.',
            'status' => true,
            'age' => 30,
        ]);

        // เพิ่มข้อมูลเพิ่มเติมตามต้องการ
    }
}
