<?php

namespace Database\Seeders;

use App\Models\vehicles_characteristics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiclesCharacteristicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $data = [
            [
                "vehicle_characteristic_name" => "test",
                "vehicle_characteristic_active" => 1,
            ],
            [
                "vehicle_characteristic_name" => "test2",
                "vehicle_characteristic_active" => 1,
            ]
        ];

        foreach($data as $dt) {
            vehicles_characteristics::create($dt);
        }

    }
}
