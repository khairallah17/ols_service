<?php

namespace Database\Seeders;

use App\Models\vehicle_chart_data;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\vehicle_data_chart;

class VehicleChartDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ["vehicle_data_rpm" => "0, 500, 1000, 1500, 2000, 2500, 3000, 3500, 4000, 4500, 5000, 5500, 6000, 6500, 7000,",
            "vehicle_data_oem_power_chart" => "
            ",
            "vehicle_data_oem_torque_chart" => "0, 122, 183, 208, 210, 202, 195, 189, 183, 176, 166, 126, 0, 0"],
            ["vehicle_data_rpm" => "0, 500, 1000, 1500, 2000, 2500, 3000, 3500, 4000, 4500, 5000, 5500, 6000, 6500, 7000,",
            "vehicle_data_oem_power_chart" => "0, 38, 66, 87, 111, 127, 144, 160, 162, 165, 165, 132, 0, 0",
            "vehicle_data_oem_torque_chart" => "0, 133, 200, 228, 230, 221, 214, 207, 200, 193, 182, 138, 0, 0"],
        ];

        foreach ($data as $d){
            vehicle_chart_data::create($d);
        }
    }
}
