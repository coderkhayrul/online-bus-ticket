<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            [
                'name' => 'Dhaka',
                'address' => 'Dhanmondi',
                'is_active' => true,
            ],
            [
                'name' => 'Comilla',
                'address' => 'BOG',
                'is_active' => true,
            ],
            [
                'name' => 'Chittagong',
                'address' => 'BOG',
                'is_active' => true,
            ],
            [
                'name' => 'Coxs Bazaar',
                'address' => 'BOG',
                'is_active' => true,
            ],
        ];

        foreach ($locations as $key => $location) {
            Location::create($location);
        }
    }
}
