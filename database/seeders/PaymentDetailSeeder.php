<?php

namespace Database\Seeders;

use App\Models\PaymentDetail;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaymentDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PAYMENT DETAIL
        // <!-- 1 -->
        PaymentDetail::create([
            'payment_header_id' => 1,
            'product_id' => 1,
            'qty' => 10,
            'item_price' => 2700,
            'item_modal' => 1800
        ]);

        // <!-- 2 -->
        PaymentDetail::create([
            'payment_header_id' => 1,
            'product_id' => 2,
            'qty' => 20,
            'item_price' => 11550,
            'item_modal' => 7700
        ]);

        // <!-- 3 -->
        PaymentDetail::create([
            'payment_header_id' => 1,
            'product_id' => 5,
            'qty' => 35,
            'item_price' => 11500,
            'item_modal' => 7700
        ]);

        // <!-- 4 -->
        PaymentDetail::create([
            'payment_header_id' => 1,
            'product_id' => 7,
            'qty' => 1,
            'item_price' => 11550,
            'item_modal' => 7700
        ]);

        // <!-- 5 -->
        PaymentDetail::create([
            'payment_header_id' => 2,
            'product_id' => 1,
            'qty' => 18,
            'item_price' => 2700,
            'item_modal' => 1800
        ]);

        // <!-- 6 -->
        PaymentDetail::create([
            'payment_header_id' => 2,
            'product_id' => 5,
            'qty' => 20,
            'item_price' => 11500,
            'item_modal' => 7700
        ]);

        // <!-- 7 -->
        PaymentDetail::create([
            'payment_header_id' => 2,
            'product_id' => 10,
            'qty' => 30,
            'item_price' => 5250,
            'item_modal' => 3500
        ]);

        // <!-- 8 -->
        PaymentDetail::create([
            'payment_header_id' => 3,
            'product_id' => 4,
            'qty' => 50,
            'item_price' => 10500,
            'item_modal' => 7000
        ]);

        // <!-- 9 -->
        PaymentDetail::create([
            'payment_header_id' => 3,
            'product_id' => 6,
            'qty' => 20,
            'item_price' => 11550,
            'item_modal' => 7700
        ]);

        // <!-- 10 -->
        PaymentDetail::create([
            'payment_header_id' => 3,
            'product_id' => 7,
            'qty' => 10,
            'item_price' => 11550,
            'item_modal' => 7700
        ]);

        // <!-- 11 -->
        PaymentDetail::create([
            'payment_header_id' => 4,
            'product_id' => 1,
            'qty' => 12,
            'item_price' => 2700,
            'item_modal' => 1800
        ]);

        // <!-- 12 -->
        PaymentDetail::create([
            'payment_header_id' => 4,
            'product_id' => 3,
            'qty' => 18,
            'item_price' => 23100,
            'item_modal' => 15400
        ]);

        // <!-- 13 -->
        PaymentDetail::create([
            'payment_header_id' => 4,
            'product_id' => 2,
            'qty' => 22,
            'item_price' => 23100,
            'item_modal' => 15400
        ]);
    // PAYMENT DETAIL
    }
}
