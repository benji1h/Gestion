<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\UE;

class UESeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UE::factory()
            ->count(10) // Adjust the count as needed
            ->create();
    }
}
