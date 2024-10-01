<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Faker\Provider\FakeCar;

class CategoriesSeeder extends Seeder
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

        $categories = [
            ['category_name' => 'cars'],
            ['category_name' => 'trucks'],
            ['category_name' => 'vans'],
            ['category_name' => 'tractors'],
            ['category_name' => 'pickups'],
        ];

        foreach($categories as $category){
            categories::create($category);
        }
    }
}
