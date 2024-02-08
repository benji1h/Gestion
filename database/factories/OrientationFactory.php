<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Orientation;
use App\Models\Section;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orientation>
 */
class OrientationFactory extends Factory
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
            //'section_id' => Section::factory(), // Replace with appropriate relationship logic
        ];
    }
}
