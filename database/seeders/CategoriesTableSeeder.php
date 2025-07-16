<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Pendidikan'],
            ['name' => 'Ekonomi'],
            ['name' => 'Sains'],
            ['name' => 'Bahasa Inggris'],
            ['name' => 'Kesehatan'],
        ]);
    }
}
