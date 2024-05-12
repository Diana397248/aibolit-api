<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appointment::factory()->create([
            'app_date' => '2024-05-12 14:20:12',
            'reason' => 'не ест',
            'status' => 'approved',
            'client_id' => 1,
            'pet_id' => 1,
            'vet_id' => 1,

        ]);
        Appointment::factory()->create([
            'app_date' => '2024-05-22 11:20:12',
            'reason' => 'Не спит',
            'status' => 'approved',
            'client_id' => 1,
            'pet_id' => 1,
            'vet_id' => 1,

        ]);
    }
}
