<?php

namespace Database\Seeders;

use App\Models\PaymentHeader;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaymentHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PAYMENT HEADER
        // <!-- 1 -->
        PaymentHeader::create([
            'user_id' => 1,
            'date' => '2023-05-05',
            'total_price' => 673800,
            'total_modal' => 449200
        ]);

        // <!-- 2 -->
        PaymentHeader::create([
            'user_id' => 2,
            'date' => '2023-05-08',
            'total_price' => 437100,
            'total_modal' => 291400
        ]);

        // <!-- 3 -->
        PaymentHeader::create([
            'user_id' => 3,
            'date' => '2023-05-09',
            'total_price' => 871500,
            'total_modal' => 581000
        ]);

        // <!-- 4 -->
        PaymentHeader::create([
            'user_id' => 4,
            'date' => '2023-05-10',
            'total_price' => 956400,
            'total_modal' => 637600
        ]);

        // <!-- 5 -->
        PaymentHeader::create([
            'user_id' => 1,
            'date' => '2023-05-10',
            'total_price' => 956400,
            'total_modal' => 364000
        ]);

        // <!-- 6-10 -->
        for($i = 0; $i < 5; $i++){
            $tanggal = (string)(26+$i);
            $strTanggal = '2023-03-'.$tanggal;

            PaymentHeader::create([
                'user_id' => 1,
                'date' => $strTanggal,
                'total_price' => 10500,
                'total_modal' => 7000
            ]);

        }
    // PAYMENT HEADER
    }
}
