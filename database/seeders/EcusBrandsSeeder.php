<?php

namespace Database\Seeders;

use App\Models\ecus_brands;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EcusBrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ecus_brands::create(["ecu_brand_name"=> "bosch"]);
    }
}
