<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Inscription;
use App\Models\User;
use App\Models\Groupe;
use App\Models\Orientation;
use App\Models\AA;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inscription>
 */
class InscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date_debut' => $this->faker->dateTime(),
            'date_fin' => $this->faker->dateTimeBetween($startDate = 'debut', $endDate = 'now', $timezone = null),
            'etat' => $this->faker->randomElement(['En cours', 'Terminée', 'Annulée']),
            // 'user_id' => User::factory(), // Add logic based on your relationships
            // 'groupes' => Groupe::factory(), // Optional: Add logic to associate groupes
            // 'orientation_id' => Orientation::factory(), // Add logic based on your relationships (optional)
            // 'aas' => AA::factory(), // Optional: Add logic to associate aas
        ];
    }
}
