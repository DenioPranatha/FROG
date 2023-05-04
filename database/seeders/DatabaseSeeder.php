<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Event;
use App\Models\PaymentDetail;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Event::create([
            'category_id' => 1,
            'name' => 'nicole',
            'start_date' => '2023-01-01',
            'end_date' => '2023-01-01',
            'description' => 'tes',
            'image' => 'tes.png'
        ]);

        Event::create([
            'category_id' => 1,
            'name' => 'nicole2',
            'start_date' => '2023-01-01',
            'end_date' => '2023-01-01',
            'description' => 'tes',
            'image' => 'tes.png'
        ]);

        Event::create([
            'category_id' => 2,
            'name' => 'nicole3',
            'start_date' => '2023-01-01',
            'end_date' => '2023-01-01',
            'description' => 'tes',
            'image' => 'tes.png'
        ]);

        Category::create([
            'name' => 'banjir'
        ]);

        // PaymentDetail::create([
        //     'qty' => 10,
        //     'item_price' => 10000,
        //     'item_modal' => 8000
        // ]);
    }
}
