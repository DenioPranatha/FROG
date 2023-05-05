<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Destination;
use App\Models\Category;
use App\Models\Event;
use App\Models\PaymentDetail;
use App\Models\ProductCategory;
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
            'destination_id' => 2,
            'user_id' => 1,
            'name' => 'rtb bantu banjir',
            'start_date' => '2023-01-01',
            'end_date' => '2023-01-01',
            'description' => 'tes',
            'image' => 'tes.png'
        ]);

        Event::create([
            'destination_id' => 1,
            'user_id' => 1,
            'name' => 'bli bantu panti asuhan',
            'start_date' => '2023-01-01',
            'end_date' => '2023-01-01',
            'description' => 'tes',
            'image' => 'tes.png'
        ]);

        Event::create([
            'destination_id' => 1,
            'user_id' => 1,
            'name' => 'nicole3',
            'start_date' => '2023-01-29',
            'end_date' => '2023-01-29',
            'description' => 'tes',
            'image' => 'tes.png'
        ]);

        Category::create([
            'name' => 'bencana alam'
        ]);

        Category::create([
            'name' => 'panti asuhan'
        ]);

        Destination::create([
            'category_id' => 2,
            'name' => 'panti asuhan ceria',
            'description' => 'tes',
            'image' => 'tes.png',
            'location' => 'lokasi',
            'link' => 'asfdkhhaskdg.com',
            'person_count' => 1000,
            'contact' => '07858172'
        ]);

        Destination::create([
            'category_id' => 1,
            'name' => 'banjir cianjur',
            'description' => 'tes',
            'image' => 'tes.png',
            'location' => 'lokasi',
            'link' => 'asfdkhhaskdg.com',
            'person_count' => 50000,
            'contact' => '07858172'
        ]);

        Destination::create([
            'category_id' => 2,
            'name' => 'panti asuhan abc',
            'description' => 'tes',
            'image' => 'tes.png',
            'location' => 'lokasi',
            'link' => 'asfdkhhaskdg.com',
            'person_count' => 1000,
            'contact' => '07858172'
        ]);

        Destination::create([
            'category_id' => 1,
            'name' => 'banjir bandang',
            'description' => 'tes',
            'image' => 'tes.png',
            'location' => 'lokasi',
            'link' => 'asfdkhhaskdg.com',
            'person_count' => 50000,
            'contact' => '07858172'
        ]);

        PaymentDetail::create([
            'payment_header_id' => 1,
            'product_id' => 1,
            'qty' => 10,
            'item_price' => 10000,
            'item_modal' => 8000
        ]);

        PaymentDetail::create([
            'payment_header_id' => 2,
            'product_id' => 1,
            'qty' => 100,
            'item_price' => 10000,
            'item_modal' => 8000
        ]);

        ProductCategory::create([
            'name' => 'pakaian'
        ]);

        ProductCategory::create([
            'name' => 'makanan'
        ]);

        ProductCategory::create([
            'name' => 'kebutuhan rumah'
        ]);

        ProductCategory::create([
            'name' => 'snack'
        ]);

        ProductCategory::create([
            'name' => 'alat tulis'
        ]);
    }
}
