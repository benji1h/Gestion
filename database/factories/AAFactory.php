<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\AA;
use App\Models\UE;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AA>
 */
class AAFactory extends Factory
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
            'lib' => $this->faker->sentence(3),
            'h' => $this->faker->numberBetween(0, 10),
            'q' => $this->faker->numberBetween(1, 5),
            'ects' => $this->faker->numberBetween(3, 6),
            'ue_id' => UE::all()->random()->id, // Replace with appropriate relationship logic
        ];
    }
}
