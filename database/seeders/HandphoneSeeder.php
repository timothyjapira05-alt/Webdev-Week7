<?php

namespace Database\Seeders;

use App\Models\Handphone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HandphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Handphone::create([
            'brand' => 'Apple',
            'model' => 'Iphone 18',
            'processor' => 'A20 Pro',
            'ram' => '16gb'
        ]);
    }
}
