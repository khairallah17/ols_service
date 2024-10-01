<?php

namespace Database\Factories;

use App\Models\vehicles;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\vehicles>
 */
class vehiclesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $vehicles = vehicles::factory()->count(3)->make();
        return [$vehicles];
    }
}
