<?php

namespace Database\Seeders;

use App\Models\CartHeader;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CartHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CART HEADER
        // <!-- 1 -->
        CartHeader::create([
            'user_id' => 1
        ]);

        // <!-- 2 -->
        CartHeader::create([
            'user_id' => 1
        ]);

        // <!-- 3 -->
        CartHeader::create([
            'user_id' => 2
        ]);

        // <!-- 4 -->
        CartHeader::create([
            'user_id' => 3
        ]);

        // <!-- 5 -->
        CartHeader::create([
            'user_id' => 4
        ]);

        // <!-- 6 -->
        CartHeader::create([
            'user_id' => 4
        ]);

        // <!-- 7 -->
        CartHeader::create([
            'user_id' => 4
        ]);
    // CART HEADER
    }
}
