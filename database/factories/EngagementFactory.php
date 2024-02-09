<?php

namespace Database\Factories;

use App\Models\Engagement;
use App\Models\User;
use App\Models\Departement;
use App\Models\Campus;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Engagement>
 */
class EngagementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'debut' => $this->faker->dateTimeThisYear,
            'fin' => $this->faker->dateTimeBetween($startDate = 'debut', $endDate = 'now', $timezone = null),
            'type' => $this->faker->word,
             //'user_id' => User::factory(), // Add logic based on your relationships
             //'campus_id' => Campus::factory(), // Add logic based on your relationships (optional)
             //'departement_id' => Departement::factory(), // Add logic based on your relationships (optional)
        ];
    }
}
