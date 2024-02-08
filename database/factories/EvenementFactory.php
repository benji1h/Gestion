<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Evenement;
use App\Models\Groupe;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evenement>
 */
class EvenementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->word,
            'debut' => $this->faker->dateTimeThisYear,
            'fin' => $this->faker->dateTimeBetween($startDate = 'debut', $endDate = 'now', $timezone = null),
             //'groupes' => Groupe::factory(), // Optional: Add logic to associate groupes
        ];
    }
}
