<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // USER
        // <!-- 1 -->
        User::create([
            'name' => 'Ardo Damarjati',
            'username' => 'ardod',
            'email' => 'damarjatiardo@gmail.com',
            'phone' => '083891725775',
            'address' => 'Jl. Hartono Raya No.3, RT.003/RW.006, Tangerang',
            'password' => 'ardo1234'
        ]);

        // <!-- 2 -->
        User::create([
            'name' => 'Denio Pranatha',
            'username' => 'deniop',
            'email' => 'deniopranatha@gmail.com',
            'phone' => '081232120178',
            'address' => 'Jl. Kartika Plaza, Kuta, Kabupaten Badung',
            'password' => 'denio1234'
        ]);

        // <!-- 3 -->
        User::create([
            'name' => 'Nicole Felice',
            'username' => 'nikolp',
            'email' => 'nicolefeliceee@gmail.com',
            'phone' => '081994097967',
            'address' => 'Jl. Kapt. A. Bakaruddin No.88, Kota Jambi',
            'password' => 'nikol1234'
        ]);

        // <!-- 4 -->
        User::create([
            'name' => 'Riskyaaa',
            'username' => 'riskyap',
            'email' => 'riskyaputra3004@gmail.com',
            'phone' => '081376092561',
            'address' => 'Jl. M. T. Haryono No.8, Kota Medan',
            'password' => 'riskya1234'
        ]);
    // USER

    }
}
