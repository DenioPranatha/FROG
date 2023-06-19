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
            'name' => 'Savoury Snack'
        ]);

        // <!-- 2 -->
        ProductCategory::create([
            'name' => 'Food'
        ]);

        // <!-- 3 -->
        ProductCategory::create([
            'name' => 'Beverage'
        ]);

        // <!-- 4 -->
        ProductCategory::create([
            'name' => 'Clothes'
        ]);

        // <!-- 5 -->
        ProductCategory::create([
            'name' => 'Accessories'
        ]);

        // <!-- 6 -->
        ProductCategory::create([
            'name' => 'Subscription'
        ]);


        // <!-- 7 -->
        ProductCategory::create([
            'name' => 'Sticker'
        ]);

        // <!-- 8 -->
        ProductCategory::create([
            'name' => 'Pants'
        ]);

        // <!-- 9 -->
        ProductCategory::create([
            'name' => 'Sweet Snack'
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
