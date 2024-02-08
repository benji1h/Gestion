<?php

namespace Database\Seeders;

use App\Models\Droit;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DroitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Droit::factory()
            ->count(3) // Adjust the count as needed
            ->create();
    }
}
