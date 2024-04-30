<?php

namespace Database\Seeders;

use App\Models\Pet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pet::factory()->create([
            'name' => 'Test name',
            'type' => 'Test type',
            'species' => 'Test species',
            'year_birth' => '2024-04-25',
            'img' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTOLhik9Wk7rCh_pBm9l3HO7vMmtgWHNk7gQoD7VvgTd07C64fK',
            'gender' => 'M',
            'owner_id' => 1,
        ]);
    }
}
