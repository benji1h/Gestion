<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Departement;
use App\Models\Campus;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departement>
 */
class DepartementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->company,
            'adresse' => $this->faker->streetAddress,
            'tel' => $this->faker->phoneNumber,
            //'campus_id' => Campus::factory(), // Optional: Add logic based on your relationships
        ];
    }
}
