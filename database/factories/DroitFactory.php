<?php

namespace Database\Factories;

use App\Models\Droit;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Droit>
 */
class DroitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->unique()->word,
            'lib' => $this->faker->sentence(2),
        ];
    }
}
