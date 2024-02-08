<?php

namespace Database\Factories;

use App\Models\Section;
use App\Models\Orientation;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section>
 */
class SectionFactory extends Factory
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
            // 'orientations' => Orientation::factory() // Optional: Add logic to associate orientations
        ];
    }
}
