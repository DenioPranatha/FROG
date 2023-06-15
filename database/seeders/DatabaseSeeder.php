<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CartDetail;
use App\Models\CartHeader;
use App\Models\Category;
use App\Models\Destination;
use App\Models\Event;
use App\Models\PaymentDetail;
use App\Models\PaymentHeader;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CartDetailSeeder::class,
            CartHeaderSeeder::class,
            CategorySeeder::class,
            DestinationSeeder::class,
            EventSeeder::class,
            PaymentHeaderSeeder::class,
            PaymentDetailSeeder::class,
            ProductSeeder::class,
            ProductCategorySeeder::class,
            UserSeeder::class
        ]);

    }
}
