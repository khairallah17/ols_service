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
        $faker = Faker::create();
        $fakeCar = new FakeCar($faker);
        $faker->addProvider($fakeCar);

        DB::table('vehicles')->insert([
            "vehicle_name" => $faker->vehicle(),
            "vehicle_fuel" => $faker->vehicleFuelType(),
            "vehicle_standard_power" => $faker->randomDigit(),
            "vehicle_standard_torque" => $faker->randomDigit(),
            "vehicle_cylinder" => Str::random(10),
            "vehicle_compression" => Str::random(10),
            "vehicle_bore" => Str::random(10),
            "category_id" => $faker->numberBetween(3, 7),
        ]);
    }
}
