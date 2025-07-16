<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title' => 'New Laravel Features',
                'content' => 'Laravel 9 has introduced new features...',
                'slug' => 'new-laravel-features',
                'category_id' => 1,
                'is_publish' => true,
                'published_at' => now(),
            ],
        ]);
    }
}
