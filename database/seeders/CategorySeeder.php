<?php

// database/seeders/CategorySeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::insert([
            ['name' => 'Pendidikan'],
            ['name' => 'Ekonomi'],
            ['name' => 'Sains'],
            ['name' => 'Bahasa Inggris'],
            ['name' => 'Kesehatan'],
        ]);
    }
}
