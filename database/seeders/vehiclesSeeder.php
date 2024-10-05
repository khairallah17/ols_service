<?php

namespace Database\Seeders;

use App\Models\vehicles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Number;

use Faker\Factory as Faker;
use Faker\Provider\FakeCar as FakeCar;

class vehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
*/
    public function run(): void
    {
        //
        $vehicles = [
            [
                'vehicle_name' => "Abarth 595C 1.4T-Jet - 165-BHP - 123-KW",
                'vehicle_fuel' => "Petrol",
                'vehicle_standard_power' => 165,
                'vehicle_standard_torque' => 230,
                'vehicle_cylinder' => "1984 CC",
                'vehicle_compression' => "9,8 : 1",
                'vehicle_bore' => "82,5 X 92,8 mm",
        
                "category_id" => 3,
                "brand_id" => 32,
                "model_id" => 104,
                "generation_id" => 4,
                "engine_id" => 853,
                "ecu_id" => 200,
                "characteristic_id" => 1,
                "data_chart_id" => 2
            ],
        ];

        foreach($vehicles as $vehicle) {
            vehicles::create($vehicle);
        }
    }
}
