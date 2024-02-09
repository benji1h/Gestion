<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Groupe;
use App\Models\AA;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Groupe>
 */
class GroupeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'acro' => $this->faker->unique()->word,
            'lib' => $this->faker->sentence(2),
            // 'evenements' => Evenement::factory(), // Optional: Add logic to associate evenements
            // 'inscriptions' => Inscription::factory(), // Optional: Add logic to associate inscriptions
            // 'aas' => AA::factory() // Optional: Add logic to associate aas
        ];
    }
}
