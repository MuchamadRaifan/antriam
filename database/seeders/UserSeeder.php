<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'antrianhehe',
            'email' =>'antrian@gmail.com',
            'password' => bcrypt('123456789'),
            // 'role' => 'admin',
        ]);
    }
}
