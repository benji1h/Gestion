<?php

namespace Database\Factories;

use App\Models\Local;
use App\Models\Campus;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Local>
 */
class LocalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lib' => $this->faker->unique()->word,
            'etage' => $this->faker->numberBetween(0, 5),
            'nb_place' => $this->faker->numberBetween(10, 100),
            'etat' => $this->faker->randomElement(['Disponible', 'Occupé', 'En maintenance']),
            // 'campus_id' => Campus::factory() // Add logic based on your relationships
        ];
    }
}
