<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Александр Александрович П',
            'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOm9CWX8P0ae02Wbc1rTdIDR7LWFoDIYTVUBadjpTSKQ&s',
            'email' => 'alexandr@example.com',
        ]);
        $this->call([
            PetSeeder::class,
            VetSeeder::class,
            AppointmentSeeder::class,
        ]);
    }
}
