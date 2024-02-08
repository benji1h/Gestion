<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Orientation;
use App\Models\UE;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UE>
 */
class UEFactory extends Factory
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
            //'orientation_id' => orientation::factory(), // Replace with appropriate relationship logic
        ];
    }
}
