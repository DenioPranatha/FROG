<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PRODUCT CATEGORY
        // <!-- 1 -->
        ProductCategory::create([
            'name' => 'Snack Asin'
        ]);

        // <!-- 2 -->
        ProductCategory::create([
            'name' => 'Makanan Berat'
        ]);

        // <!-- 3 -->
        ProductCategory::create([
            'name' => 'Minuman'
        ]);

        // <!-- 4 -->
        ProductCategory::create([
            'name' => 'Baju'
        ]);

        // <!-- 5 -->
        ProductCategory::create([
            'name' => 'Aksesoris'
        ]);

        // <!-- 6 -->
        ProductCategory::create([
            'name' => 'Premium'
        ]);


        // <!-- 7 -->
        ProductCategory::create([
            'name' => 'Sticker'
        ]);

        // <!-- 8 -->
        ProductCategory::create([
            'name' => 'Celana'
        ]);

        // <!-- 9 -->
        ProductCategory::create([
            'name' => 'Snack Manis'
        ]);

        // <!-- 10 -->
        ProductCategory::create([
            'name' => 'Hoodie / Jacket'
        ]);

        // 11
        ProductCategory::create([
            'name' => 'Logistic'
        ]);
    // PRODUCT CATEGORY
    }
}
