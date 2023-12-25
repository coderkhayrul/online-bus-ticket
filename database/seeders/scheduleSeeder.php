<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;

class scheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schedules = [
            [
                'trip_id' => 1,
                'bus_id' => 1,
                'departure_date' => '2023-10-01',
                'fare' => 450,
            ],
            [
                'trip_id' => 1,
                'bus_id' => 2,
                'departure_date' => '2023-10-02',
                'fare' => 500,
            ],
            [
                'trip_id' => 1,
                'bus_id' => 3,
                'departure_date' => '2023-10-03',
                'fare' => 450,
            ],
            [
                'trip_id' => 1,
                'bus_id' => 4,
                'departure_date' => '2023-10-04',
                'fare' => 650,
            ],
        ];

        foreach ($schedules as $key => $value) {
            Schedule::create($value);
        }
    }
}
