<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CATEGORY
        // <!-- 1 -->
        Category::create([
            'name' => 'Bencana Alam'
        ]);

        // <!-- 2 -->
        Category::create([
            'name' => 'Panti Asuhan'
        ]);

        // <!-- 3 -->
        Category::create([
            'name' => 'Panti Jompo'
        ]);

        // <!-- 4 -->
        Category::create([
            'name' => 'Fasilitas Umum'
        ]);

        // <!-- 5 -->
        Category::create([
            'name' => 'Bantuan Kesehatan'
        ]);
    // CATEGORY
    }
}
