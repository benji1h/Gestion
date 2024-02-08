<?php

namespace Database\Factories;

use App\Models\Materiel;
use App\Models\Local;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materiel>
 */
class MaterielFactory extends Factory
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
            'type' => $this->faker->word,
            'marque' => $this->faker->company,
            'prix' => $this->faker->randomFloat(2, 10, 1000),
            'etat' => $this->faker->randomElement(['Neuf', 'Usagé', 'En panne']),
            // 'local_id' => Local::factory() // Add logic based on your relationships (optional)
        ];
    }
}
