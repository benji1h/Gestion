<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Campus;
use App\Models\Departement;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Campus>
 */
class CampusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->unique()->city,
            'adresse' => $this->faker->streetAddress,
            'tel' => $this->faker->phoneNumber,
            //'departement_id' => Departement::factory(), // Optional: Add logic based on your relationships
        ];
    }
}
