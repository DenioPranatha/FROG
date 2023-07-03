<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        User::create([
            'name' => 'admin',
            'image' => 'admin.png',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '081122334455',
            'address' => 'admin',
            'password' => Hash::make('admin123')
        ]);

        // <!-- 1 -->
        User::create([
            'name' => 'Ardo Damarjati',
            'image' => 'user1.png',
            'username' => 'ardod',
            'email' => 'damarjatiardo@gmail.com',
            'phone' => '083891725775',
            'address' => 'Jl. Hartono Raya No.3, RT.003/RW.006, Tangerang',
            'password' => Hash::make('ardo1234')
        ]);

        // <!-- 2 -->
        User::create([
            'name' => 'Denio Pranatha',
            'image' => 'user2.png',
            'username' => 'deniop',
            'email' => 'deniopranatha@gmail.com',
            'phone' => '081232120178',
            'address' => 'Jl. Kartika Plaza, Kuta, Kabupaten Badung',
            'password' => Hash::make('denio1234')
        ]);

        // <!-- 3 -->
        User::create([
            'name' => 'Nicole Felice',
            'image' => 'user3.png',
            'username' => 'nikolp',
            'email' => 'nicolefeliceee@gmail.com',
            'phone' => '081994097967',
            'address' => 'Jl. Kapt. A. Bakaruddin No.88, Kota Jambi',
            'password' => Hash::make('nicole1234')
        ]);

        // <!-- 4 -->
        User::create([
            'name' => 'Riskyaaa',
            'image' => 'user4.png',
            'username' => 'riskyap',
            'email' => 'riskyaputra3004@gmail.com',
            'phone' => '081376092561',
            'address' => 'Jl. M. T. Haryono No.8, Kota Medan',
            'password' => Hash::make('riskya1234')
        ]);
    // USER

    }
}
